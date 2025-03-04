// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
  };

// FUNCIÓN CALLBACK DE BOTÓN "Buscar"
function buscarProducto(e) {
    e.preventDefault();

    // Obtener el término de búsqueda desde el input
    var searchTerm = document.getElementById('search').value.trim();

    // Validar que se haya ingresado algo en el campo de búsqueda
    if (searchTerm === "") {
        alert("Por favor, ingresa un término de búsqueda.");
        return;
    }

    // Crear la solicitud AJAX
    var client = getXMLHttpRequest();
    client.open('POST', './backend/read.php', true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    client.onreadystatechange = function () {
        if (client.readyState == 4 && client.status == 200) {
            console.log('[CLIENTE]\n' + client.responseText);

            let productos = JSON.parse(client.responseText);

            // Verificar si hay resultados
            if (productos.length > 0) {
                let template = '';

                productos.forEach(producto => {
                    let descripcion = `
                        <li>Precio: ${producto.precio}</li>
                        <li>Unidades: ${producto.unidades}</li>
                        <li>Modelo: ${producto.modelo}</li>
                        <li>Marca: ${producto.marca}</li>
                        <li>Detalles: ${producto.detalles}</li>
                    `;

                    template += `
                        <tr>
                            <td>${producto.id}</td>
                            <td>${producto.nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                        </tr>
                    `;
                });

                // Insertar los resultados en la tabla con ID "productos"
                document.getElementById("productos").innerHTML = template;
            } else {
                document.getElementById("productos").innerHTML = "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
            }
        }
    };

    client.send("search=" + encodeURIComponent(searchTerm));
}

// FUNCIÓN CALLBACK DE BOTÓN "Agregar Producto"
function agregarProducto(e) {
    e.preventDefault();

    // SE OBTIENE DESDE EL FORMULARIO EL JSON A ENVIAR
    var productoJsonString = document.getElementById('description').value;
    // SE CONVIERTE EL JSON DE STRING A OBJETO
    var finalJSON = JSON.parse(productoJsonString);
    // SE AGREGA AL JSON EL NOMBRE DEL PRODUCTO
    finalJSON['nombre'] = document.getElementById('name').value;
    // SE OBTIENE EL STRING DEL JSON FINAL
    productoJsonString = JSON.stringify(finalJSON,null,2);

    // SE CREA EL OBJETO DE CONEXIÓN ASÍNCRONA AL SERVIDOR
    var client = getXMLHttpRequest();
    client.open('POST', './backend/create.php', true);
    client.setRequestHeader('Content-Type', "application/json;charset=UTF-8");
    client.onreadystatechange = function () {
        // SE VERIFICA SI LA RESPUESTA ESTÁ LISTA Y FUE SATISFACTORIA
        if (client.readyState == 4 && client.status == 200) {
            console.log(client.responseText);
        }
    };
    client.send(productoJsonString);
}

// SE CREA EL OBJETO DE CONEXIÓN COMPATIBLE CON EL NAVEGADOR
function getXMLHttpRequest() {
    var objetoAjax;

    try{
        objetoAjax = new XMLHttpRequest();
    }catch(err1){
        /**
         * NOTA: Las siguientes formas de crear el objeto ya son obsoletas
         *       pero se comparten por motivos historico-académicos.
         */
        try{
            // IE7 y IE8
            objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(err2){
            try{
                // IE5 y IE6
                objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(err3){
                objetoAjax = false;
            }
        }
    }
    return objetoAjax;
}

function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;
}

function validarProducto(producto) {
    if (!producto.nombre || producto.nombre.length > 100) {
        return "El nombre es obligatorio y debe tener 100 caracteres o menos.";
    }

    if (!producto.marca || typeof producto.marca !== "string") {
        return "La marca es obligatoria y debe ser un texto válido.";
    }

    if (!producto.modelo || !/^[a-zA-Z0-9]+$/.test(producto.modelo) || producto.modelo.length > 25) {
        return "El modelo es obligatorio, alfanumérico y debe tener 25 caracteres o menos.";
    }

    if (!producto.precio || isNaN(producto.precio) || parseFloat(producto.precio) <= 99.99) {
        return "El precio es obligatorio y debe ser mayor a 99.99.";
    }

    if (producto.detalles && producto.detalles.length > 250) {
        return "Los detalles deben tener 250 caracteres o menos.";
    }

    if (producto.unidades === undefined || isNaN(producto.unidades) || parseInt(producto.unidades) < 0) {
        return "Las unidades son obligatorias y deben ser un número mayor o igual a 0.";
    }

    // Si no hay imagen, asignar una por defecto
    if (!producto.imagen) {
        producto.imagen = "img/default.png";
    }

    return "ok"; // Si todo está bien
}


// function agregarProducto(event) {
//     event.preventDefault(); // Evita la recarga del formulario

//     let descripcionInput = document.getElementById("description");
//     let nombreInput = document.getElementById("name").value.trim();

//     if (!nombreInput || !descripcionInput.value.trim()) {
//         alert("El nombre y la descripción (JSON) son obligatorios.");
//         return;
//     }

//     let producto;
//     try {
//         producto = JSON.parse(descripcionInput.value); // Intenta convertir el JSON ingresado
//     } catch (e) {
//         alert("Formato JSON inválido en la descripción.");
//         return;
//     }

//     // Se agrega el nombre al objeto producto
//     producto.nombre = nombreInput;

//     fetch('./backend/create.php', {
//         method: 'POST',
//         headers: { 'Content-Type': 'application/json' },
//         body: JSON.stringify(producto)
//     })
//     .then(response => response.json())
//     .then(data => {
//         alert(data.mensaje);
//         if (data.estado === "exito") {
//             document.getElementById("name").value = ""; // Limpia el campo de nombre

//             // Se restablece el JSON con una plantilla base
//             descripcionInput.value = JSON.stringify({
//                 precio: 0,
//                 unidades: 1,
//                 modelo: " ",
//                 marca: " ",
//                 detalles: " ",
//                 imagen: " "
//             }, null, 2);
//         }
//     })
//     .catch(error => console.error('Error:', error));
// }

function agregarProducto(event) {
    event.preventDefault(); // Evita la recarga de la página

    let descripcionInput = document.getElementById("description");
    let nombreInput = document.getElementById("name").value.trim();

    if (!nombreInput || !descripcionInput.value.trim()) {
        alert("El nombre y la descripción (JSON) son obligatorios.");
        return;
    }

    let producto;
    try {
        producto = JSON.parse(descripcionInput.value); // Convierte el JSON a objeto
    } catch (e) {
        alert("Formato JSON inválido en la descripción.");
        return;
    }

    // Se agrega el nombre al objeto producto
    producto.nombre = nombreInput;

    // 🔹 **Validamos el producto antes de enviarlo**
    let mensajeValidacion = validarProducto(producto);
    if (mensajeValidacion !== "ok") {
        alert(mensajeValidacion);
        return;
    }

    // Si pasa la validación, enviamos el producto
    fetch('./backend/create.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(producto)
    })
    .then(response => response.json())
    .then(data => {
        alert(data.mensaje);
        if (data.estado === "exito") {
            document.getElementById("name").value = ""; // Limpia el campo de nombre

            // Se restablece el JSON con una plantilla base
            descripcionInput.value = JSON.stringify({
                marca: "",
                modelo: "",
                precio: "",
                unidades: "",
                detalles: "",
                imagen: ""
            }, null, 2);
        }
    })
    .catch(error => console.error('Error:', error));
}
