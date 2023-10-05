$(document).ready(function () { 
    
    var buttonOpen = document.getElementById('btn-modal--style');
    var buttonClose = document.getElementById('home-modal-close-btn'); 
    var buttonLogout = document.getElementById('logout_btn');        
    
    var modalMenu = document.getElementById("home__modal-menu");
    var modalLogout = document.getElementById("home__modal-logout");

    buttonClose.onclick = function () {
        modalMenu.style.display = "none";
    }

    buttonOpen.onclick = function () {
        modalMenu.style.display = "block";
    }
    /*
    buttonLogout.click(function(e){             
        e.preventDefault();
        modal.style.display = "none";
        
    })
    */


})