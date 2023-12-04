<?php
    session_start();
    require_once('../models/personsModel.php');
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirmpassword = $_REQUEST['confirmpassword'];

    if($email == ""){
        echo "Empty email!";
        
    }else{
        $status = register($name, $phone, $email, $password);
        if ($status){
            header("location: ../index.html");

        }else{
            echo "Failed";
        }
    }
?>