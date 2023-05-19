document.getElementById("upload-form").addEventListener("submit", function (event) {
    event.preventDefault();

    var domain = window.location.hostname;

    alert("¡Publicación subida con éxito en " + domain + "!");

    window.location.href = "../views/";
});