<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
    <link href="productos.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="fotosProductos/logotab.png">
</head>

<body>
    <div class="sidenav">
        <div class="logo">
            <a href="listaProductos.php"><img src="fotosProductos/logo.png" alt=""></a>
        </div>
        <a href="index.php">INICIO</a>
        <a href="listaProductos.php">PRODUCTOS</a>
    </div>

    <?php
    //Hacer una consulta en BD para traer todos los usuarios

    //Incluir el archivo donde está nuestra clase basedatos
    include("basedatos.php");
    
    //Crear la consulta SQL para buscar datos
    $consultaSQL="SELECT * FROM productos WHERE 1";

    //Crear un objeto de la clase basedatos y usar el método buscarDatos
    $transaccion= new basedatos();
    $productos=$transaccion->buscarDatos($consultaSQL);

    ?>
    <div class="container" >
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach($productos as $producto):?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($producto["nombreProducto"])?></h5>
                            <p class="card-text"><?php echo($producto["marcaProducto"])?></p>
                            <p class="card-text"><?php echo($producto["precioProducto"])?></p>
                            <p class="card-text"><?php echo($producto["descripcion"])?></p>
                            <a href="eliminarProductos.php?id=<?php echo($producto["idProducto"]) ?>" class="btn btn-danger">Eliminar</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                            Editar
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProducto.php?id=<?php echo($producto["idProducto"])?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombreProducto"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marcaProducto"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="number" class="form-control" name="precioEditar" value="<?php echo($producto["precioProducto"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control" name="descripcionEditar" value="<?php echo($producto["descripcion"])?>"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-warning" name="botonEditar">Editar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>




     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
