<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodega de Productos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    <div class="degradado">
        <!--Menu de navegacion-->
        <header id="header">
            <nav class="menu">
                <div class="logo">
                    <span><h1><a href="index.php" class="btn-menu">Cell-Store<i class="fas fa-mobile-alt"></i></a></h1></span>
                </div>
                <div class="list-container">
                    <ul class="list lista">
                        <li><a href="index.php">Administracion</a></li>
                        <li><a href="bodega.php">Bodega</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--Menu de navegacion-->
        <main>
            <?php
                include("BaseDatos.php");
                $transaccion = new BaseDatos;
                $buscarPro = "SELECT * FROM productos";
                $productos = $transaccion -> buscarProducto($buscarPro);        
            ?>
            
            <div class="container">
                <div class="form-title">
                    <h2>Productos en Bodega</h2>
                    <hr>
                </div>
                <div class="row row-cols-1 row-cols-md-3">
                    <?php foreach($productos as $producto):?>
                        <div class="col mb-4">

                            <div class="card h-100">
                                <img src="<?php echo($producto["imagen"]) ?>" class="card-img-top" width="auto" height="340px">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo($producto["nombre"]) ?></h3>
                                    <br>
                                    <p class="card-text"><strong>Marca: </strong><?php echo($producto["marca"]) ?></p>
                                    <p class="card-text"><strong>Referencia: </strong><?php echo($producto["referencia"]) ?></p>
                                    <p class="card-text"><strong>Precio: </strong><?php echo($producto["precio"]) ?></p>
                                    <p class="card-text"><strong>Fecha de Ingreso: </strong><?php echo($producto["fecha"]) ?></p>
                                    <p class="card-text"><strong>Descripción: </strong><?php echo($producto["descripcion"]) ?></p>
                                    <p class="card-text" style="text-align: center;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                            Editar
                                        </button>
                                        <a href="eliminarProducto.php?id=<?php echo($producto["idProducto"]) ?>" class="btn btn-primary">Borrar</a>
                                    </p>
                                </div>
                            </div>

                            <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Editar Producto</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="content-formulario">
                                                <form action="editarProducto.php?id=<?php echo($producto["idProducto"])?>" method="POST" id="formulario">
                                                    <p>
                                                        <label for="nombre">Nombre del Producto</label>
                                                        <input type="text" name="nombre" value="<?php echo($producto["nombre"])?>">
                                                    </p>
                                                    <p>
                                                        <label for="imagen">Url</label>
                                                        <input type="text" name="imagen" value="<?php echo($producto["imagen"])?>">
                                                    </p>
                                                    <p>
                                                        <label for="marca">Marca del Producto</label>
                                                        <input type="text" name="marca" value="<?php echo($producto["marca"])?>">
                                                    </p>
                                                    <p>
                                                        <label for="precio">Precio</label>
                                                        <input type="text" name="precio" value="<?php echo($producto["precio"])?>">
                                                    </p>
                                                    <p class="block" style="align-content: center;">
                                                        <label for="descripcion">Descripción</label>
                                                        <textarea name="descripcion" id="descripcion" rows="3"><?php echo($producto["descripcion"])?></textarea>
                                                    </p>
                                                    <p class="block">
                                                        <button type="submit" class="btn btn-info" name="editar">Editar</button>
                                                    </p>
                                                    
                                                </form>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach?>
                </div>
            </div>
        
        </main>
        <!--Pie de pagina-->
    <footer id="footer">
        <div class="footer">
            <p>Autor - Juan Pablo Moná Quintana</p>
            <p>Reservado por Derechos de Autor</p>
        </div>
    </footer>
    <!--Pie de pagina-->
    <script src="https://kit.fontawesome.com/ef7b8d3b1b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>