<!doctype html>
<html>

<head>
    <title>Iniciar sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .form-control {
            max-width: 300px;
            margin: auto;
        }

        .label-input {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <center>
        <br>
        <div class="form-floating mb-3">
            <center>
                <div text-align:center>
                    <div class="bd-example-snippet bd-code-snippet" text-align:center>
                        <a href="../views/layout.php"><img id="" src="../images/logo.png" width="325" height="200"></a>
                        <br>
                        <form style="border:1px solid black;padding:1rem;border-radius: 0.5rem;" class="form-control">
                            <h2>Iniciar sesion</h2>
                            <br>
                            <div class="center">
                                <div class="form-floating mb-3">
                                    <div class="label-input">
                                        <!--<label for="floatingInput">Nombre de usuario:</label>-->
                                        <input type="text" class="form-control" id="EmailUsername" placeholder="nombre de usuario">
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="label-input">
                                        <!-- <label for="floatingpassword">Contraseña:</label>-->
                                        <input type="password" class="form-control" id="Password" placeholder="contraseña">
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <h3><input type="submit" value="Acceder" class="btn btn-primary" id="login-btn"></h3>
                                </div>
                            </div>

                            <h5><a href="" style="color:red" type="button" class="--bs-primary-text-emphasis">¿Olvidaste tu contraseña?</a></h5>
                            <br>
                            <h3><a href="register.php" role="button" class="btn btn-success">Crear cuenta</a></h3>
                    </div>
                    </form>
                </div>
            </center>
        </div>
    </center>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/user/login.js"></script>