<?php

class basedatos{
public $usuarioBD="root";
public $passwordBD="";
public function __construct(){}


public function conectarBD(){
    try{
        $infoBD="mysql:host=localhost;dbname=tiendaweb1";
        $conexionBD= new PDO($infoBD,$this->usuarioBD,$this->passwordBD);
        return($conexionBD);
    }catch(PDOException $error){
        echo($error->getMessage());
    }
    
}

public function agregarDatos($consultaSQL){
    //Conectarme a la DB
    $conexionBD=$this->conectarBD();
    //Preparar la consulta
    $consultaAgregarDatos=$conexionBD->prepare($consultaSQL);
    //Ejecutar la consulta
    $resultado=$consultaAgregarDatos->execute();
    //Verificar el resultado
    if($resultado){
        echo("Producto agregado con éxito");

    }else{
        echo("Error agregando el producto");
    }
}

public function buscarDatos($consultaSQL){
    //Conectarme a la DB
    $conexionBD=$this->conectarBD();
    //Preparar la consulta
    $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);
    //Indicar cuál es el método para traer los datos
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
    //Ejecutar la consulta
    $consultaBuscarDatos->execute();
    //Retornar los datos consultados
    return($consultaBuscarDatos->fetchAll());
    
}

public function eliminarDatos($consultaSQL){
    //Conectarme a la DB
    $conexionBD=$this->conectarBD();
    //Preparar la consulta
    $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
    //Ejecutar la consulta
    $resultado=$consultaEliminarDatos->execute();
    //Verificar el resultado
    if($resultado){
        echo("Producto eliminado con éxito");

    }else{
        echo("Error eliminando el producto");
    }
}

public function editarDatos($consultaSQL){
    //Conectarme a la DB
    $conexionBD=$this->conectarBD();
    //Preparar la consulta
    $consultaEditarDatos=$conexionBD->prepare($consultaSQL);
    //Ejecutar la consulta
    $resultado=$consultaEditarDatos->execute();
    //Verificar el resultado
    if($resultado){
    echo("Edición realizada con éxito");

    }else{
    echo("Error editando el producto");
    }
}




}
?>
