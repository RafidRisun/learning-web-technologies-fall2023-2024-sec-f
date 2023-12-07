<?php

    require_once('db.php');

    function login($id, $password){
        $con = getConnection();
        $sql = "select * from user where id='{$id}' and password='{$password}';";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);

        if($person){
            return true;
        }else{
            return false;
        }
    }

    function type($id){
        $con = getConnection();
        $sql = "select * from user where id='{$id}';";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);

        return $person;
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

    function register($id, $name, $email, $password, $usertype){
        $con = getConnection();
        $sql = "insert into persons (name, phone, email, password) values ('{$id}', '{$name}', '{$email}', '{$password}', '{$usertype}');";
        $result = mysqli_query($con, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function show($id){
        $con = getConnection();
        $sql = "select * from user where id='{$id}';";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);

        return $person;
    }
?>