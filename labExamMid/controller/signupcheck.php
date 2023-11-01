<?php 
    require_once("../models/userModel.php");

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmpass'];
    $id = $_REQUEST['id'];
    $type = $_REQUEST['type'];

    if($username == "" || $password == "" || $confirmPassword == "" || $id == "" || $type == ""){
        echo "null info!";
    }
    else{
        if($password != $confirmPassword)
            {
                echo "Confirm Password does not match. Please re-write password!";
            }
        else{
                $status = signup($username, $password, $id, $type);
                if($status == true){
                    $_SESSION['user'] = $user;
                    header('location: ../views/login.html');
                }
                else{
                    echo "Sign up failed try again";
                }
                    
            }
    }
?>