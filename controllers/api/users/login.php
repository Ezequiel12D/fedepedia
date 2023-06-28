<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
var_dump($_POST);
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);    
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $message = [];
    require_once "../../../includes/config.php";   

    if(!empty($username))
    {
        $sqlCheckLogin = 'SELECT username FROM users WHERE username = "'. $username .'" AND password = "'. sha1($password) .'"';
        $resultCheckLogin = mysqli_query($conn, $sqlCheckLogin);
    }elseif(!empty($email)){
        $sqlCheckLogin = 'SELECT email FROM users WHERE email = "'. $email .'" AND password = "'. sha1($password) .'"';
        $resultCheckLogin = mysqli_query($conn, $sqlCheckLogin);
    }
    
    if(!$resultCheckLogin){
        $message['error'] = "Error al consultar y encontrar cuenta";
        exit("Error de consulta" . mysqli_error($conn));        
    }

    if(mysqli_num_rows($resultCheckLogin)){    
        $sqlLogin = 'SELECT users.*, users_roles.rol_id FROM users LEFT JOIN users_roles ON user.id = users_roles.user_id';
        $resultLogin = mysqli_query($conn,$sqlLogin);

        if(!$resultLogin){
            $message['error'] = "Erro al consultaro datos de la cuenta";
            exit("Error de consulta" . mysqli_error($conn)); 
        }else{
            $message['message'] = "Ha iniciado sesion correctamente";
            $message['userData'] = "";
        }

    }

}else{
    $message['error'] = "Formulario vacio";
    //$message['error'] = $_POST['email'];
}

return print_r(json_encode($message));

?>