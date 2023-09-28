<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style_layout.css">
</head>

<body>
    <div id="left-bar">
        <link rel="icon" type="image/x-icon" href="../images/logo.png">
        <div class="container-logo">
            <a href="">
                <img src="../images/logo.png" class="rounded float-left img-logo" alt="img_logo">
            </a>
        </div>

        <div class="lh"></div>
        <div id="link-bar">
            <ul>

                <li><a href="../views/articlerandom.php">Articulo aleatorio</li>
                <li><a href="../views/setting.php">Configuracion</a></li>
                <li><a href="../views/createarticles.php">Crear articulo</a></li>
                <li><a href="../views/myarticles.php">Mis articulos</a></li>
                <li><a href="../views/savedarticles.php">Articulos guardados</a></li>
                <li><a href="">Filtrar</a></li>
                <li><a href="../views/help.php">Ayuda</a></li>
                <li><a href="../views/denuncias.php">DENUNCIAS</a></li>
            </ul>
        </div>

    </div>
    <div id="right-bar">
        <div class="container--menu-btn" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <script>
            function myFunction(x) {
                x.classList.toggle("change");
            }
        </script>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal()">&times;</span>
                <h2>Iniciar sesión o registrarse</h2>
                <button onclick="login()">Iniciar sesión</button>
                <button onclick="register()">Registrarse</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <label for="label1" class="text-center">Nombre:</label>
                <input type="text" class="form-control" id="label1">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="label2" class="text-center">Nombre de Usuario:</label>
                <input type="text" class="form-control" id="label2">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="label3" class="text-center">Correo Electronico:</label>
                <input type="text" class="form-control" id="label3">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6 text-center">
                <label for="denuncia">Razón de Ayuda:</label>
                <textarea class="form-control" id="ayuda" rows="5" placeholder="Mensaje de Ayuda"></textarea>
            </div>
        </div>
        <div class="row justify-content-end mt-5">
            <div class="col-md-6 text-right">
                <a href="../controllers/web/home.php" class="btn btn-secondary ">Cancelar</a>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
</body>

</html>