<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Productos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="degradado">
    <!--Menu de navegacion-->
    <header id="header">
        <nav class="menu">
            <div class="logo">
                <span><h1><a href="#" class="btn-menu">Cell-Store<i class="fas fa-mobile-alt"></i></a></h1></span>
            </div>
            <div class="list-container">
                <ul class="list lista">
                    <li><a href="index.php">Administración</a></li>
                    <li><a href="bodega.php">Bodega</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!--Menu de navegacion-->
    <!--Formulario-->
    <main>
        <div class="container">
            <div class="deg-container"></div>
                <div class="form-title">
                    <h2>Administración de Productos</h2>
                    <hr>
                </div>
                <div class="content-formulario">
                    <form id="formulario" action="resgistroProductos.php" method="POST" enctype="multipart/form-data">
                        <p>
                            <label for="nombre">Nombre del Producto</label>
                            <input type="text" id="nombre" placeholder="Ingrese el nombre del producto" name="nombre" required>
                        </p>
                        <p>
                            <label for="imagen">Url (imagen del producto)</label>
                            <input type="text" id="imagen" placeholder="Ingrese una imagen del producto" name="imagen">
                        </p>
                        <p>
                            <label for="marca">Marca del Producto</label>
                            <input type="text" id="marca" placeholder="Ingrese la marca del producto" name="marca" required>
                        </p>
                        <p>
                            <label for="referencia">Referencia</label>
                            <input type="text" id="referencia" placeholder="Ingrese la referencia del producto" name="referencia" required>
                        </p>
                        <p>
                            <label for="precio">Precio</label>
                        <input type="text" id="precio" placeholder="Ingrese el precio del producto" name="precio" required>
                        </p>
                        <p>
                            <label for="fecha">Fecha</label>
                            <input type="date" id="fecha" name="fecha" required>
                        </p>
                        <p class="block">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="3" required></textarea>
                        </p>
                        <p class="block">
                            <button type="submit" name="enviar">Enviar</button>
                        </p> 
                    </form>
                </div>
        </div>
    </main>
    <!--Formulario-->
    <!--Pie de pagina-->
    <footer id="footer">
        <div class="footer">
            <p>Autor - Juan Pablo Moná Quintana</p>
            <p>Reservado por Derechos de Autor</p>
        </div>
    </footer>
    <!--Pie de pagina-->
</div>
    <script src="https://kit.fontawesome.com/ef7b8d3b1b.js" crossorigin="anonymous"></script>
</body>
</html>