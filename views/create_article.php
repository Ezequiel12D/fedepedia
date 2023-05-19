<head>
  <title>Subida de publicaciones</title>
  <link rel="stylesheet" type="text/css" href="../css/style_create_article.css">
</head>

<body>
  <header>
    <div class="logo-container">
      <img src="../images/logo.png" alt="Wikipedia Logo">
    </div>
    <h1 class="title">Crear Artículo</h1>
  </header>
  <div class="content">
    <div class="form-container">
      <form id="upload-form">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="10" style="white-space: pre-wrap;"></textarea>
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*">
        <button type="submit" name="submit">Subir Publicación</button>
        <button type="button" onclick="window.location.href='../views/'">Arrepentir</button>
      </form>
    </div>
  </div>
  <script src="../js/botton.js"></script>
