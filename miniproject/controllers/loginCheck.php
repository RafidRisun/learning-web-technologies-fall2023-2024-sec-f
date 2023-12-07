<?php
    session_start();
    require_once('../models/userModel.php');
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];

    if($id == "" || $password == "" ){
        echo "Empty userName or password!";
        
    }else{
        $status = login($id, $password);
        $type = type($id);
        if ($status){
            $_SESSION['flag'] = 'true';
            $_SESSION['id'] = $id;
            if($type == "User"){
                header("location: ../views/userhome.php");
            }
            else if($type == "Admin")
            {
                header("location: ../views/adminhome.php");
            }
        }else{
            header("location: ../index.html");
        }
    }
?>