<body>
    <header>
        <div class="logo-container">
            <link rel="stylesheet" href="../css/style_createarticles.css">
            <img src="../images/logo.png" alt="Logo">
        </div>
        <h1 class="title">Subida de publicaciones</h1>
    </header>
    <div class="form-container">
        <form method="post" action="#" enctype="multipart/form-data">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" rows="10" style="white-space: pre-wrap;"></textarea>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*">
            <button type="submit" name="submit">Subir Publicación</button>
            <button type="button" onclick="window.location.href='home.php'">Arrepentir</button>
        </form>
    </div>
</body>