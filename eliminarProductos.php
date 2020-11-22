<?php
include("basedatos.php");
//0. Recibir el id del registro a eliminar
$id=$_GET["id"];


//1. Utilizar la base de datos
$transaccion=new basedatos();

//2. Crear una consulta para eliminar registros
$ConsultaSQL="DELETE FROM productos WHERE idProducto='$id'";

//3. Llamar y utilizar el método eliminarDatos
$transaccion->eliminarDatos($ConsultaSQL);



?>