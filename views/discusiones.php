<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_layout.css">

</head>

<body>
    <input type="search" placeholder="Busca tu Archivo" id="buscador" />

    <div id="left-bar">
        <div class="container-logo">
            <a href="">
                <img src="../images/logo.png" class="rounded float-left img-logo" alt="img_logo">
            </a>
        </div>
        <div id="search-bar">
        </div>
        <div class="lh" style="top:35%"></div>
    </div>
    </div>
    <div id="right-bar">
        <div class="container--menu-btn" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <script>function myFunction(x) { x.classList.toggle("change"); } </script>
        <div class="profile-pic-btn">
            <div id="user_profile_pic"><img src="../images/profile/default.png" alt="profile_pic"></div>
        </div>
        <div id="user-name"><b>user-name</b></div>
    </div>
</body>

</html>