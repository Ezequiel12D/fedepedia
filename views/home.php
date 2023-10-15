<?php session_start(); ?>    

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
            <li><a href="">Filtrar</a></li>
            <li><a href="../../views/denuncias.php">Discusiones</a></li>
            <li><a href="../../views/help.php">Ayuda</a></li>
            <li><a href="../../views/denuncias.php">Denuncias</a></li>
            <?php if(isset($_SESSION['user']) && $_SESSION['user'][0]['rol_id'] != 1){ 
                ?> <li><a href="../../controllers/web/add_ad.php">Añadir Publicidad</a></li> <?php
            }?>                    
        </ul>
    </div>
</div>

<div id="container__center">
    <?php require "article.php"; ?>
</div>

<div id="right-bar">    
    <!-- inicio modal-->    
            
    <img id="btn-modal--style" class="three_dots" src="../../images/three-dots.svg" alt="" srcset="">
        
    <div class="modal-menu" id="home__modal-menu">
        <div class="container-modal">
                <header class="modal-item"> <?php echo isset($_SESSION['user']) ? ($_SESSION['user'][0]['username']) : "no log"; ?> </header>                
                
                <label class="btn-close" id="home-modal-close-btn" for="btn-modal">X</label>
                
                <div class="content modal-item">
                    <?php 
                        if(!isset($_SESSION['user'])){
                            echo '<a href="../../views/register.php">Registrarse</a><br>
                            <a href="../../views/login.php">Iniciar Sesion</a>';
                        }else{
                            echo '<a href="logout.php">Cerrar Sesion</a>';
                        }
                    ?>
                    
                </div>
        </div>
    </div>

    <!-- fin modal-->
    
    <div class="profile">
        <div class="profile-pic-btn">
            <div id="user_profile_pic"><img src="../../images/profile/default.png" alt="profile_pic"></div>
        </div>
        <div id="user-name"><b> <?php echo isset($_SESSION['user']) ? ($_SESSION['user'][0]['username']) : "no log"; ?> </b></div>
    </div>

    <div class = "addImg">
        <?php // require "../../controllers/web/addsManage.php"; ?>
    </div>

</div>