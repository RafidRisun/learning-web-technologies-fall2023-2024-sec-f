<?php

    require_once('db.php');

    function login($id, $password){
        $con = getConnection();
        $sql = "select * from users where id='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return $user['type'];
        }else{
            return false;
        }
    }

    function signup($username, $password, $id, $type){
        $con = getConnection();
        $sql = "insert into users (username, password, id, usertype) values ('{$username}', '{$password}', '{$id}', '{$type}')";
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

    function getUser($id){
        $con = getConnection();
        $sql = "select * from users where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function adduser(){

    }

    function deleteUser(){

    }

    function updateUser(){
        
    }


?>
