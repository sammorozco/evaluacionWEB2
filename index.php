<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA WEB1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
    <link href="productos.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="fotosProductos/logotab.png">
    
    
</head>
<div class="sidenav">
        <div class="logo">
            <a href="listaProductos.php"><img src="fotosProductos/logo.png" alt=""></a>
        </div>
  <a href="index.php">Inicio</a>
  <a href="listaProductos.php">Productos</a>
</div>
<body background="img/vino.jpg">

    <div class="row justify-content-center">
        <header><br>
            <h1>ADMINISTRACIÓN DE PRODUCTOS</h1><br>
            </div>
            
        </header>
            <main>
                <form class="" action="registrarProductos.php" method="POST"> 
                    <div class = "container">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder="NombreProducto" name="nombre">
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder="MarcaProducto" name="marca">
                                </div>
                            </div>
                        </div>  
                    </div><br>
                    <div class = "container">
                    <div class="row justify-content-center">
                            <div class="col-8">
                                <input type="number" class="form-control" placeholder="PrecioProducto" name="precio">
                            </div>
                        </div>
                    </div><br>
                    <div class = "container">
                    <div class="row justify-content-center">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Foto URL" name="foto">
                            </div>
                        </div>
                    </div><br>
                    <div class = "container">
                    <div class="row justify-content-center">
                            <div class="col-8">
                                <textarea class="form-control" rows="4" placeholder="Descripción" name="descripcion"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <button class="btn btn-danger" type="submit" name="botonRegistrar">Registrar</button>
                    </div>
                </form>
            </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
