$(document).ready(function () { 
    
    var buttonOpen = document.getElementById('btn-modal--style');
    var buttonClose = document.getElementById('home-modal-close-btn'); 
                                                                       
    var modal = document.getElementById("home__modal-menu");

    buttonClose.onclick = function () {
        modal.style.display = "none";
    }

    buttonOpen.onclick = function () {
        modal.style.display = "block";
    }
})