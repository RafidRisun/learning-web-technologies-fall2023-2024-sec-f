<?php 
    require_once("../models/userModel.php");

    session_start();
    $password = $_REQUEST['password'];
    $id = $_REQUEST['id'];

    if($password == "" || $id == ""){
        echo "null id or password!";
    }
    else{
        $type = login($password, $id);
        if($type=="user"){
                $_SESSION['flag'] = 'true';
                header("location: ../views/user_home.php?id={$id}");
            }
        else if($type=="admin"){
                $_SESSION['flag'] = 'true';
                header("location: ../views/admin_home.php?id={$id}");
            }
        else{
            echo "Login failed try again";
        }     
    }
?>