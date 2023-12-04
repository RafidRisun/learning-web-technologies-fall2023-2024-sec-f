<?php
    session_start();
    require_once('../models/personsModel.php');
    $email = $_REQUEST['email'];

    if($email == ""){
        echo "Empty email!";
        
    }else{
        $status = checkemail($email);
        if ($status){
            echo "Account with this email already exists!";

        }else{
            echo "Email available";
        }
    }
?>