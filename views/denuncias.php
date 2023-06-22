<!DOCTYPE html>
<html>

<head>
    <title>Página de Denuncias</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Reporte de Contenido</h1>
        <form>
            <div class="form-group">
                <label for="asunto">Asunto:</label>
                <input type="text" class="form-control" id="asunto" placeholder="Asunto">
            </div>
            <div class="form-group">
                <label for="observacion">Observación:</label>
                <textarea class="form-control" id="denuncia" rows="5" placeholder="Describe la denuncia"></textarea>
            </div>
            <a href="../views/home.php" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>
