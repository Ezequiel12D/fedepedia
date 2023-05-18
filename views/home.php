<?php include_once ("layout.php"); ?>

<div id="left-bar">
    
    <div class="container-logo">
        <a href="">
            <img src="../images/logo.png" class="rounded float-left img-logo" alt="img_logo">
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
            <li><a href="">Portada</a></li>
            <li><a href="">Articulos destacados</a></li>
            <li><a href="">Articulos nuevos</a></li>
            <li><a href="">Articulo aleatorio</li>
            <li><a href="">Configuracion</a></li>
            <li><a href="">Crear articulo</a></li>
            <li><a href="">Mis articulos</a></li>
            <li><a href="">Articulos guardados</a></li>
            <li><a href="">Filtrar</a></li>
            <li><a href="../views/help.php">Ayuda</a></li>
            <li><a href="">DENUNCIAS</a></li>
        </ul>
    </div>

</div>

<div id="container__center">
    <?php require"article.php";?>
</div>


    <div id="right-bar">        
        <div class="container--menu-btn" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <script>function myFunction(x) {x.classList.toggle("change");} </script>



    <div class="profile-pic-btn">    
        <div id="user_profile_pic"><img src="../images/profile/default.png" alt="profile_pic"></div>
    </div>
    <div id="user-name"><b>user-name</b></div>
</div>

</div>