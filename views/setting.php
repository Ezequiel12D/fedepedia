<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Preferencias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .btn-preference {
            display: block;
            width: 100%;
            text-align: left;
            padding: 10px 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: #f8f9fa;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-preference:hover {
            background-color: #e9ecef;
        }

        .btn-preference.active {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Preferencias</h1>
        <button class="btn btn-preference active">Cambiar foto de perfil</button>
        <button class="btn btn-preference">Cambiar nombre</button>
        <button class="btn btn-preference">Cambiar contraseña</button>
        <button class="btn btn-preference">Cambiar correo electronico</button>
        <button class="btn btn-preference">Cambiar idioma</button>
        <button class="btn btn-preference">Mis articulos</button>
        <button class="btn btn-preference">Cerrar sesion</button>
        <button class="btn btn-preference">Eliminar cuenta</button>
</body>
</html>