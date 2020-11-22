<?php

    include("basedatos.php");

    if(isset($_POST["botonRegistrar"])){
        //1.Recibir datos
        $nombreProducto=$_POST["nombre"];
        $marcaProducto=$_POST["marca"];
        $precioProducto=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $foto=$_POST["foto"];

        //Crear una copia de la clase basedatos
        $transaccion= new basedatos();

        //Crear la consulta para agregar datos
        $consultaSQL="INSERT INTO productos(nombreProducto, marcaProducto, precioProducto, descripcion,foto) VALUES ('$nombreProducto','$marcaProducto','$precioProducto','$descripcion','$foto')";

        //Llamar al método
        $transaccion->agregarDatos($consultaSQL);
    }
?>
