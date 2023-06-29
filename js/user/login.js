$(document).ready(function () {
    document.getElementById("login-btn").disabled = true
    var flag = {};

    const ValidUserName = /^[a-zA-Z0-9\-_\.]+$/ ;
    const ValidEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/ ;

    var emailValue, usernameValue, passwordValue;

    addEventListener("keyup", function(e) { 

        var nameEmail = document.getElementById("EmailUsername");
        var password = document.getElementById("Password");
                
        //elimino los espacios        
        var usernameEmailValue = nameEmail.value.trim();
        passwordValue = password.value.trim();        


        //email
        if(ValidEmail.test(usernameEmailValue)){
            flag.email = true;
            emailValue = usernameEmailValue;
        }else{
            flag.email = false;
        }//username
        if(usernameEmailValue.length >= 4 && usernameEmailValue.length <= 15 && ValidUserName.test(usernameEmailValue)){
            flag.username = true;
            usernameValue = usernameEmailValue;
        }else{
            flag.username = false;
        }//contraseña
        if(passwordValue.length > 4 && passwordValue.length < 40 && ValidUserName.test(passwordValue)){
            flag.password = true;
        }else{
            flag.password = false;
        }
        
        //habilito btn
        if(flag.username && flag.password || flag.email && flag.password)
        {
            document.getElementById("login-btn").disabled = false;            
        }else{
            document.getElementById("login-btn").disabled = true;
        }

        
    });

    $('#login-btn').click(function(e){             
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: '../controllers/api/users/login.php',
            data: {username: usernameValue, email: emailValue, password: passwordValue},
            dataType: 'JSON',
                success:function(r){
                    if(r.message == "Ha iniciado sesion correctamente"){                                
                        console.log(r);
                        window.location.href = '../views/layout.php'; 
                    }else{
                        console.log("Error al iniciar sesion");
                        console.log(r);
                    }
                }
        });
    }) 
});