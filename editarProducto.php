<?php

include("basedatos.php");

if(isset($_POST["botonEditar"])){
    $nombreProducto=$_POST["nombreEditar"];
    $marcaProducto=$_POST["marcaEditar"];
    $precioProducto=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];
    
    $id=$_GET["id"];
    
    $transaccion= new basedatos();

    $consultaSQL="UPDATE productos SET nombreProducto='$nombreProducto', marcaProducto='$marcaProducto', precioProducto='$precioProducto', descripcion='$descripcion' WHERE idProducto='$id'";

    $transaccion->editarDatos($consultaSQL);

    header("location:listaProductos.php");

}


?>