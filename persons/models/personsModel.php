<?php

    require_once('db.php');

    function login($email, $password){
        $con = getConnection();
        $sql = "select * from persons where email='{$email}' and password='{$password}';";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);

        if($person){
            return true;
        }else{
            return false;
        }
    }
    function checkemail($email){
        $con = getConnection();
        $sql = "select * from persons where email='{$email}';";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);

        if($person){
            return true;
        }else{
            return false;
        }
    }

    function register($name, $phone, $email, $password){
        $con = getConnection();
        $sql = "insert into persons (name, phone, email, password) values ('{$name}', '{$phone}', '{$email}', '{$password}');";
        $result = mysqli_query($con, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function show($email){
        $con = getConnection();
        $sql = "select * from persons where email='{$email}';";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);

        return $person;
    }
?>