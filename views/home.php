<div id="left-bar">
    <link rel="icon" type="image/x-icon" href="../../images/logo.png">
    <div class="container-logo">
        <a href="">
            <img src="../../images/logo.png" class="rounded float-left img-logo" alt="img_logo">
        </a>
    </div>

    <div class="lh"></div>

    <div id="search-bar">
        <nav class="navbar navbar-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" style="width: 70%;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
    <div class="lh" style="top:35%"></div>
    <div id="link-bar">
        <ul>
            <li><a href="../../views/articlerandom.php">Articulo aleatorio</li>
            <li><a href="../../views/setting.php">Configuracion</a></li>
            <li><a href="../../views/createarticles.php">Crear articulo</a></li>
            <li><a href="../../views/myarticles.php">Mis articulos</a></li>
            <li><a href="../../views/savedarticles.php">Articulos guardados</a></li>
            <li><a href="">Filtrar</a></li>
            <li><a href="../../views/help.php">Ayuda</a></li>
            <li><a href="../../views/denuncias.php">DENUNCIAS</a></li>
        </ul>
    </div>
</div>

<div id="container__center">
    <?php require "article.php"; ?>
</div>

<div id="right-bar">
    <!-- inicio modal-->
    <div class="dropdown" id="btn-modal--style">
        <span>...</span>
        <div class="dropdown-content">
            <a href="../../views/login.php" id="login-link">Iniciar Sesión</a>
            <a href="../../views/register.php" id="register-link">Registrar</a>
        </div>
    </div>

    <div class="modal-menu">
        <div class="container-modal">
            <header>user-name</header>
            <label for="btn-modal">X</label>
            <div class="content">
                <a href="../../views/register.php">Registrarse</a><br>
                <a href="../../views/setting.php">Iniciar Sesion</a>
            </div>
        </div>
    </div>


    <!-- fin modal-->
    <div class="profile">
        <div class="profile-pic-btn">
            <div id="user_profile_pic"><img src="../../images/profile/default.png" alt="profile_pic"></div>
        </div>
        <div id="user-name"><b>user-name</b></div>
    </div>

</div>
</div>