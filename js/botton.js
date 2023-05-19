// Código JavaScript para mostrar una alerta después de enviar el formulario
document.getElementById("upload-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    // Aquí puedes agregar la lógica para procesar la subida de la publicación

    // Obtener solo el nombre del dominio
    var domain = window.location.hostname;

    // Mostrar una alerta de publicación subida sin "localhost"
    alert("¡Publicación subida con éxito en " + domain + "!");

    // Redireccionar al home después de procesar la subida
    window.location.href = "../views/"; // Reemplaza "home.html" con la URL de tu página home
});
