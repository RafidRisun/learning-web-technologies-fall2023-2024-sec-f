<?php

    require_once('db.php');

    function login($username, $password){
        $con = connect();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return $user['type'];
        }else{
            return false;
        }
    }

    function signup($username, $password, $type){
        $con = connect();
        $sql = "insert into users (username, password, type) values ('{$username}', '{$password}', '{$type}')";
        $result = mysqli_query($con, $sql);

        if(isset($result))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getUser($username){
        $con = connect();
        $sql = "select * from users where username='{$username}'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        $user = mysqli_fetch_assoc($result);
        return $user;
    }
?>