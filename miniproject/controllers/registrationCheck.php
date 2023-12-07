<?php
    session_start();
    require_once('../models/userModel.php');
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $type = $_REQUEST['type'];


        $status = register($id, $name, $email, $password, $type);
        if ($status){
            header("location: ../views/login.html");

        }else{
            echo "Failed";
        }
?>