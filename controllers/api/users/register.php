<?php 

if (!empty($_POST)) {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);    
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $birth_date = trim($_POST['birth_date']);
    $gender = trim($_POST['gender']);

    $message = [];    
    
    // Comprueba que no exista ninguna cuenta con ese email
    require_once "../../../includes/config.php";    
    $sqlCheckEmail = 'SELECT email, username FROM users WHERE email = "'. $email .'" OR username = "'. $username .'"';
    $resultCheckEmail = mysqli_query($conn, $sqlCheckEmail);
   
    if(mysqli_num_rows($resultCheckEmail)) {
        $message['message'] = "Error al registrarse";
        $message['email'] =  "El correo electronico ya fue registrado.";
    }else{
        $register = 'INSERT INTO users(email, username, name, password, birth_date, gender, created_at) VALUES ("'. $email .'" , "'. $username .'" , "'. $name .'" , "'. sha1($password) .'" , "'. $birth_date .'" , "'. $gender .'" , now())';                          
        
        $resultRegister = mysqli_query($conn,$register); 

        if($resultRegister){
            
            $sqlLogin = 'SELECT users.*, users_roles.rol_id FROM users 
            LEFT JOIN users_roles
            ON users.id = users_roles.user_id
            WHERE users.email = "'. $email .'" AND users.password = "'. sha1($password) . '"';

            $sqlLoginResult = mysqli_query($conn,$sqlLogin);
            if($sqlLoginResult){
                $rowLogin = mysqli_fetch_assoc($sqlLoginResult);
                if($rowLogin['rol_id'] == null){
                    $message['id'] = $rowLogin['id'];
                    $rolRegister = 'INSERT INTO users_roles(user_id, rol_id) VALUES("'. $rowLogin['id'] .'" , 1 )';
                    $rolRegisterResult = mysqli_query($conn,$rolRegister);
                    
                    if(!$rolRegister){
                        $message['error'] = "No se ha registrado el rol";
                        exit("Error de consulta" . mysqli_error($conn));                        
                    }else{
                        $selectLogin = 'SELECT users.*, users_roles.rol_id FROM users LEFT JOIN users_roles ON users.id = users_roles.user_id WHERE users.username = "'. ($username)  .'" AND users.password = "'. sha1($password).'"';
                        $rowLogin = mysqli_query($conn,$selectLogin);
                    }
                }              
                $_SESSION['user'] = mysqli_fetch_all($rowLogin, MYSQLI_ASSOC);
                $message['message'] = "Se ha registrado correctamente";
            }else{
                exit("Error de consulta" . mysqli_error($conn));
            }
        }
        else{
            exit("Error de consulta" . mysqli_error($conn));
        }
    }
    return print_r(json_encode($message));
}