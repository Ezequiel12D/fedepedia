<?php require_once "../includes/js_stylesheet.php" ?>

<body>
    <center>
        <br>
        <div class="form-floating mb-3">
            <center>
                <div text-align:center>
                    <div class="bd-example-snippet bd-code-snippet" text-align:center>
                        <a href="../index.php"><img id="" src="../images/logo.png" width="325" height="200"></a>
                        <br>
                        <form style="border:1px solid black;padding:1rem;border-radius: 0.5rem;" class="form-control">
                            <h2>Iniciar sesion</h2>
                            <br>
                            <div class="center">
                                <div class="form-floating mb-3">
                                    <div class="label-input">
                                        <input type="text" class="form-control" id="UsernameEmail" placeholder="Usuario o mail">
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="label-input">
                                        <input type="password" class="form-control" id="Password" placeholder="contraseña">
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <h3><input type="submit" value="Acceder" class="btn btn-primary" id="login-btn"></h3>
                                </div>
                            </div>

                            <h5><a href="" style="color:red" type="button" class="--bs-primary-text-emphasis">¿Olvidaste tu contraseña?</a></h5>
                            <br>
                            <h3><a href="register.php" role="button" class="btn btn-success">Registrarse</a></h3>
                    </div>
                    </form>
                </div>
            </center>
        </div>
    </center>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/user/login.js"></script>