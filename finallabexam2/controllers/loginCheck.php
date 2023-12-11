<?php 
    require_once("../models/userModel.php");

    session_start();
    $password = $_REQUEST['password'];
    $username = $_REQUEST['username'];
    $_SESSION['username'] = $username;

    if($password == "" || $username == ""){
        echo "null username or password!";
    }
    if($username == "admin" && $password == "admin"){
        header("location: ../views/admin.html");
    }
    else{
        $type = login($username, $password);
        if($type=="buyer"){
                $_SESSION['flag'] = 'true';
                header("location: ../views/buyerhome.html");
            }
        else if($type=="seller"){
                $_SESSION['flag'] = 'true';
                header("location: ../views/sellerhome.html");
            }
        else{
            echo "Login failed try again";
        }     
    }
?>