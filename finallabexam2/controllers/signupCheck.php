<?php 
    require_once("../models/userModel.php");

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $type = $_POST['type'];

    if($username == "" || $password == "" || $confirmPassword == "" || $type == ""){
        echo "null info!";
    }
    else{
        if($password != $confirmPassword)
            {
                echo "Confirm Password does not match. Please re-write password!";
            }
        else{
                $status = signup($username, $password, $type);
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