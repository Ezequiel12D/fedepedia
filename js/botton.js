document.getElementById("upload-form").addEventListener("submit", function (event) {
    event.preventDefault();

    var domain = window.location.hostname;

    customAlert("¡Publicación subida con éxito en " + domain + "!");

    window.location.href = "../views/";
});
function customAlert(message) {
    var modifiedMessage = message.replace(/localhost/g, 'FedePedia');
    window.alert(modifiedMessage);
}