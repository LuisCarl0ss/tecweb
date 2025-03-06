// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
};

function init() {
    var JsonString = JSON.stringify(baseJSON, null, 2);
    $('#description').val(JsonString);
    listarProductos();
}

function listarProductos() {
    $.ajax({
        url: './backend/product-list.php',
        type: 'GET',
        dataType: 'json',
        success: function(productos) {
            if (Object.keys(productos).length > 0) {
                let template = '';
                productos.forEach(producto => {
                    let descripcion = '';
                    descripcion += '<li>precio: ' + producto.precio + '</li>';
                    descripcion += '<li>unidades: ' + producto.unidades + '</li>';
                    descripcion += '<li>modelo: ' + producto.modelo + '</li>';
                    descripcion += '<li>marca: ' + producto.marca + '</li>';
                    descripcion += '<li>detalles: ' + producto.detalles + '</li>';

                    template += `
                        <tr productId="${producto.id}">
                            <td>${producto.id}</td>
                            <td>
                                <a href="#" class="task-item" onclick="editarProducto(${producto.id})">${producto.nombre}</a>
                            </td>
                            <td><ul>${descripcion}</ul></td>
                            <td>
                                <button class="product-delete btn btn-danger" onclick="eliminarProducto()">
                                    Eliminar
                                </button>                               
                            </td>
                        </tr>
                    `;
                });
                $('#products').html(template);
            }
        }
    });
}

function buscarProducto(e) {
    e.preventDefault();
    var search = $('#search').val();
    $.ajax({
        url: './backend/product-search.php',
        type: 'GET',
        data: { search: search },
        dataType: 'json',
        success: function(productos) {
            if (Object.keys(productos).length > 0) {
                let template = '';
                let template_bar = '';
                productos.forEach(producto => {
                    let descripcion = '';
                    descripcion += '<li>precio: ' + producto.precio + '</li>';
                    descripcion += '<li>unidades: ' + producto.unidades + '</li>';
                    descripcion += '<li>modelo: ' + producto.modelo + '</li>';
                    descripcion += '<li>marca: ' + producto.marca + '</li>';
                    descripcion += '<li>detalles: ' + producto.detalles + '</li>';

                    template += `
                        <tr productId="${producto.id}">
                            <td>${producto.id}</td>
                            <td>
                                <a href="#" class="task-item" onclick="editarProducto(${producto.id})">${producto.nombre}</a>
                            </td>
                            <td><ul>${descripcion}</ul></td>
                            <td>
                                <button class="product-delete btn btn-danger" onclick="eliminarProducto()">
                                    Eliminar
                                </button>                               
                            </td>
                        </tr>
                    `;

                    template_bar += `<li>${producto.nombre}</li>`;
                });
                $('#product-result').removeClass('d-none').addClass('d-block');
                $('#container').html(template_bar);
                $('#products').html(template);
            }
        }
    });
}

function eliminarProducto() {
    if (confirm("De verdad deseas eliminar el Producto")) {
        var id = $(event.target).closest('tr').attr('productId');
        $.ajax({
            url: './backend/product-delete.php',
            type: 'GET',
            data: { id: id },
            dataType: 'json',
            success: function(respuesta) {
                let template_bar = '';
                template_bar += `<li style="list-style: none;">status: ${respuesta.status}</li>`;
                template_bar += `<li style="list-style: none;">message: ${respuesta.message}</li>`;
                $('#product-result').removeClass('d-none').addClass('d-block');
                $('#container').html(template_bar);
                listarProductos();
            }
        });
    }
}

function editarProducto(id) {
    $.ajax({
        url: './backend/product-get.php',
        type: 'GET',
        data: { id: id },
        dataType: 'json',
        success: function(producto) {
            $('#name').val(producto.nombre);
            $('#description').val(JSON.stringify(producto, null, 2));
            $('#productId').val(producto.id);
        }
    });
}

$(document).ready(function() {
    $('#product-form').on('submit', function(e) {
        e.preventDefault();
        var productoJsonString = $('#description').val();
        var finalJSON = JSON.parse(productoJsonString);
        finalJSON['nombre'] = $('#name').val();
        productoJsonString = JSON.stringify(finalJSON, null, 2);
        var id = $('#productId').val();
        var url = id ? './backend/product-update.php' : './backend/product-add.php';
        $.ajax({
            url: url,
            type: 'POST',
            contentType: 'application/json;charset=UTF-8',
            data: productoJsonString,
            dataType: 'json',
            success: function(respuesta) {
                let template_bar = '';
                template_bar += `<li style="list-style: none;">status: ${respuesta.status}</li>`;
                template_bar += `<li style="list-style: none;">message: ${respuesta.message}</li>`;
                $('#product-result').removeClass('d-none').addClass('d-block');
                $('#container').html(template_bar);
                listarProductos();
            }
        });
    });
    $('form').on('submit', buscarProducto);
    console.log($('#productId').val());
});
