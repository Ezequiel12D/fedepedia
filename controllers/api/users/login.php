<?php
session_start();
if (!empty($_POST)) {
    if(!empty($_POST['username'])){
        $username = trim($_POST['username']);  
    }
    if(!empty($_POST['email'])){
        $email = trim($_POST['email']);
    }
    
    $password = $_POST['password'];

    $message = [];
    require_once "../../../includes/config.php";   

    if(!empty($_POST['username']))
    {
        $sqlCheckLogin = 'SELECT username FROM users WHERE username = "'. $username .'" AND password = "'. sha1($password) .'"';
        $resultCheckLogin = mysqli_query($conn, $sqlCheckLogin);
    }elseif(!empty($_POST['email'])){
        $sqlCheckLogin = 'SELECT email FROM users WHERE email = "'. $email .'" AND password = "'. sha1($password) .'"';
        $resultCheckLogin = mysqli_query($conn, $sqlCheckLogin);
    }
    
    if(!$resultCheckLogin){
        $message['error'] = "Error al consultar y encontrar cuenta";
        exit("Error de consulta" . mysqli_error($conn));        
    }

    if(mysqli_num_rows($resultCheckLogin) === 1){    

        $data = mysqli_fetch_assoc($resultCheckLogin);

        if(isset($data['username'])){
            $sqlLogin = 'SELECT users.*, users_roles.rol_id FROM users LEFT JOIN users_roles ON users.id = users_roles.user_id WHERE users.username = "'. ($data['username'])  .'" AND users.password = "'. sha1($password).'"';
        }else{
            $sqlLogin = 'SELECT users.*, users_roles.rol_id FROM users LEFT JOIN users_roles ON users.id = users_roles.user_id WHERE users.email = "'. ($data['email'])  .'" AND users.password = "'. sha1($password).'"';
        }        
        $resultLogin = mysqli_query($conn,$sqlLogin);

        if(!$resultLogin){
            $message['error'] = "Erro al consultaro datos de la cuenta";
            exit("Error de consulta" . mysqli_error($conn)); 
        }else{
            $message['message'] = "Ha iniciado sesion correctamente";
            session_start();
            $_SESSION[] = $data;
        }
    }

}else{
    $message['error'] = "Formulario vacio";
}

return print_r(json_encode($message));
?>