<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_layout.css">
    <title>Discusiones</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <input type="search" placeholder="Busca tu Archivo" id="buscador" />
    <div class="container-inputs">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Discusion">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Asunto">
        </div>
    </div>
    <div class="textarea-descript">
        <textarea class="form-control" rows="10" aria-label="With textarea"></textarea>
    </div>

    <div class="button-container">
        <button class="btn btn-primary">Editar</button>
        <button class="btn-add btn btn-primary">Añadir</button>
    </div>
    <div id="left-bar">
        <div class="container-logo">
            <a href="">
                <img src="../images/logo.png" class="rounded float-left img-logo" alt="img_logo">
            </a>
        </div>
        <div id="search-bar">
        </div>
        <div class="lh" style="top:25%"></div>
    </div>
    </div>
    <div id="right-bar">
        <div class="container--menu-btn" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="low-btn-container">
            <button class="btn btn-primary">Cancelar</button>
            <button class="btn-send btn btn-primary">Enviar</button>
        </div>

        <script>
            function myFunction(x) {
                x.classList.toggle("change");
            }
        </script>
        <div class="profile-pic-btn">
            <div id="user_profile_pic"><img src="../images/profile/default.png" alt="profile_pic"></div>
        </div>
        <div id="user-name"><b>user-name</b></div>
    </div>
</body>

</html>