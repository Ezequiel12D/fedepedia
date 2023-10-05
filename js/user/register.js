$(document).ready(function () {
    document.getElementById("reg-btn").disabled = true
    var flag = {};
    const ValidateName = /^[a-zA-Z]+$/ ;
    const ValidUserName = /^[a-zA-Z0-9\-_\.]+$/ ;
    const ValidEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/ ;

    var nameValue, usernameValue, emailValue, passwordValue, confirmValue, genderValue, dateValue;

    addEventListener("change", function(e) { 

        var name = document.getElementById("Name");
        var username = document.getElementById("Username");
        var email = document.getElementById("Email");
        var password = document.getElementById("Password");
        var confirmpass = document.getElementById("confirmpass");
        var date = document.getElementById("Date");
        var gender = document.getElementById("Gender");
        //elimino los espacios
        nameValue = name.value.trim();
        usernameValue = username.value.trim();
        emailValue = email.value.trim();
        passwordValue = password.value.trim();
        confirmValue = confirmpass.value.trim();
        genderValue = gender.value.trim();
        dateValue = date.value;


        //nombre
        if(nameValue.length >= 4 && nameValue.length <= 25 && ValidateName.test(nameValue)){
            flag.name = true;
        }else{
            flag.name = false;
        }//nombre de usuario    
        if(usernameValue.length >= 4 && usernameValue.length <= 15 && ValidUserName.test(usernameValue)){
            flag.username = true;
        }else{
            flag.username = false;
        }//email
        if(ValidEmail.test(emailValue)){
            flag.email = true;
        }else{
            flag.email = false;
        }//contraseña
        if(passwordValue.length > 4 && passwordValue.length < 40 && ValidUserName.test(passwordValue) && password.value == confirmValue){
            flag.password = true;
        }else{
            flag.password = false;
        }
        if(date.value != "" && gender.value != ""){
            flag.dategender = true
        }else{
            flag.dategender = false
        }
        //habilito btn
        if(flag.name && flag.username && flag.email && flag.password && flag.dategender)
        {
            document.getElementById("reg-btn").disabled = false;            
        }else{
            document.getElementById("reg-btn").disabled = true;
        }

        
    });

    $('#reg-btn').click(function(e){             
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: '../controllers/api/users/register.php',
            data: {name: nameValue, username: usernameValue, email: emailValue, password: passwordValue, gender: genderValue, birth_date: dateValue},
            dataType: 'JSON',
                success:function(r){
                    if(r.message == "Se ha registrado correctamente"){                                
                        console.log(r);
                        window.location.href = '../controllers/web/home.php'; 
                    }else{
                        alert("Error al registrarce" + r.message);
                        console.log(r);
                    }
                }
        });
    }) 
});
