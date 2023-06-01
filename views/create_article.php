<head>
  <title>Subida de publicaciones</title>
  <link rel="stylesheet" type="text/css" href="../css/style_create_article.css">
</head>
<body>
<header style="margin-bottom: 20px;">
<div class="logo-container">
      <img src="../images/logo.png" alt="Wikipedia Logo">
    </div>
    <h1 class="title">Crear Artículo</h1>
    </header>  

  <div class="centrado">
  <div class="content">
  
    <div class="form-container">
      <form id="upload-form">
        <h2 class="titulo" style="margin-top: 250px;"><label for="titulo">Título:</label></h2>
        <input type="text" id="titulo" name="titulo" required>
        <h2><label for="contenido">Contenido:</label></h2>
        <div id="contenido" contenteditable="true" style="width: 600px; height: 180px; border: 1px solid #ccc; padding: 5px;"></div>
        <p id="contador-caracteres">0/500</p>
        <h2><label for="imagen">Imagen:</label></h2>
        <input type="file" id="imagen" name="imagen" accept="image/*">
        <button type="submit" name="submit">Subir Publicación</button>
        <button type="button" onclick="window.location.href='../views/'">Cancelar</button>
      </form>
    </div>
  </div>
</div>



  <script src="../js/botton.js"></script> 
  <script src="../js/counter.js"></script>