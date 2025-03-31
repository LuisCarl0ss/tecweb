<?php
    
    use tecweb\myapi\Products as Products;

    require_once __DIR__ . '/myapi/Products.php';

    // Crear instancia de la clase Products
    $products = new Products('root', 'LuiS14uwu26', 'marketzone');

    // Llamar al método correspondiente para listar productos
    $products->list();

    // Devolver la respuesta en formato JSON
    echo $products->getData();

?>