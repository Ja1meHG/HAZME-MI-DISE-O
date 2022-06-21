<?php

    include('../conec.php');


    $codigoProducto = $_POST['id'];
    $nombreProducto = $_POST['editarnombre'];
    $precioProducto = $_POST['editarprecio'];
    $fabricanteProducto = $_POST['F'];

    

   /*  $editarProducto = "UPDATE producto 
    SET nombre = '$nombreProducto', precio = '$precioProducto', codigo_fabricante = '$fabricanteProducto' 
    WHERE codigo = '$codigoProducto'"; */

    $editarProducto = " CALL sp_editarProducto
     ('$nombreProducto',  '$precioProducto','$fabricanteProducto', 
    '$codigoProducto')";
    
    print_r($_GET);

    $resultado = mysqli_query($conexion,$editarProducto);

    header('Location: ../productos.php');   

?> 