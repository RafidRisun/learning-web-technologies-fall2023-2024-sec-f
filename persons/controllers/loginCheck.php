<?php
    session_start();
    require_once('../models/personsModel.php');
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($email == "" || $password == "" ){
        echo "Empty userName or password!";
        
    }else{
        $status = login($email, $password);
        if ($status){
            $_SESSION['flag'] = 'true';
            $_SESSION['currentEmail'] = $email;
            header("location: ../views/home.php");

        }else{
            header("location: ../views/register.html");
        }
    }
?>