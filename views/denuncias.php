<!DOCTYPE html>
<html>

<head>
    <title>Página de Denuncias</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .logo-img {
            height: 70px;
            margin-right: 10px;
        }

        .header-title {
            text-align: center;
            color: white;
            margin: 0;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-cancel {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="../images/logo.png" alt="logo" class="logo-img">
            <h1 class="header-title">Reporte de Contenido</h1>
        </nav>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="asunto">Asunto:</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <label for="observacion">Observación:</label>
                            <textarea class="form-control" id="denuncia" rows="5" placeholder="Describe la denuncia"></textarea>
                        </div>
                        <a href="../views/home.php" class="btn btn-secondary btn-cancel">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>