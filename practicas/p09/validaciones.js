document.getElementById('productoForm').addEventListener('submit', function(event) {
    var nombre = document.getElementById('nombre').value;

    if (nombre === '' || nombre.length > 100) {
        alert('El campo "Nombre del producto" es obligatorio y debe tener 100 caracteres o menos.');
        event.preventDefault(); // Evita que el formulario se envíe
    }

    var marca = document.getElementById('marca').value;

    if (marca === '') {
        alert('El campo "Marca" es obligatorio y debe seleccionarse de la lista.');
        event.preventDefault();
    }

    var modelo = document.getElementById('modelo').value;
    var alfanumerico = /^[a-z0-9]+$/i;

    if (modelo === '' || modelo.length > 25 || !alfanumerico.test(modelo)) {
        alert('El campo "Modelo" es obligatorio, debe ser texto alfanumérico y tener 25 caracteres o menos.');
        event.preventDefault();
    }

    var precio = document.getElementById('precio').value;
    precio = parseFloat(precio);

    if (isNaN(precio) || precio < 99.9) {
        alert('El campo "Precio" es obligatorio y debe ser mayor o igual a 99.9.');
        event.preventDefault();
    }

    var detalles = document.getElementById('detalles').value;

    if (detalles.length > 250) {
        alert('El campo "Detalles" debe tener 250 caracteres o menos.');
        event.preventDefault();
    }

    var unidades = document.getElementById('unidades').value;
    unidades = parseInt(unidades);

    if (isNaN(unidades) || unidades <= 0) {
        alert('El campo "Unidades" es obligatorio y debe ser mayor a 0.');
        event.preventDefault();
    }

    var imagen = document.getElementById('imagen').value;

    if (imagen === '') {
        document.getElementById('imagen').value = 'p09/p09-base/src/cat.png'; // Asigna la ruta de imagen por defecto
    }
});