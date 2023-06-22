<!doctype html>
<html>

<head>
    <title>Registrarse<title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/x-icon" href="../images/logo.png">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <style>
                .form-control {
                    max-width: 300px;
                    margin: auto;
                }

                .form-control1 {
                    max-width: 120px;
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
        <div>
            <center>
                <div text-align:center>
                    <div class="bd-example-snippet bd-code-snippet" text-align:center>
                        <a href="../views/layout.php"><img id="" src="../images/logo.png" width="325" height="200"></a>
                        <br>
                        <form style="border:1px solid black;padding:1rem;border-radius: 0.5rem;" class="form-control">
                            <h2>Registrarse</h2>
                            <br>
                            <div class="center">
                                <div class="form-floating mb-3">
                                    <div class="label-input">
                                        <!--<label for="floatingInput">Nombre de usuario:</label>-->
                                        <input type="text" class="form-control" id="Nombre" placeholder="nombre ">
                                    </div>
                                    <br>
                                    <div class="label-input">
                                        <input type="text" class="form-control" id="NombreUsuario" placeholder="nombre de usuario">
                                    </div>
                                    <br>
                                    <div class="label-input">
                                        <input type="email" class="form-control" id="CorreoElectronico" placeholder="correo electronico">
                                    </div>
                                    <br>
                                    <div class="label-input">
                                        <!-- <label for="floatingpassword">Contraseña:</label>-->
                                        <input type="password" class="form-control" id="password" placeholder="contraseña">
                                    </div>
                                    <br>
                                    <div class="label-input">
                                        <input type="password" class="form-control" id="Repetirpassword" placeholder="repetir contraseña">
                                    </div>
                                    <br>
                                </div>
                                <div>
                                    <input type="date" class="form-control1" id="Fecha">
                                    <input type="list" class="form-control1" id="Genero" placeholder="genero">

                                </div>
                            </div>
                            <br>
                            <h3><input type="submit" value="Enviar" class="btn btn-success"></h3>
                    </div>
                </div>
                </form>
                </br>
            </center>
        </div>
    </center>
</body>


</html>