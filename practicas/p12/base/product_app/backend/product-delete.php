<?php
    namespace TECWEB\MYAPI\DELETE;
    require_once __DIR__.'/backend/Delete/Delete.php';

    $productos = new Products('marketzone');
    $productos->delete( $_POST['id'] );
    echo $productos->getData();
?>