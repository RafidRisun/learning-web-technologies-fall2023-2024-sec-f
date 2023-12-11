<?php

    require_once('db.php');

    function viewproductlist(){
        $con = connect();
        $sql = "select * from products where approval = 'yes'";
        $result = mysqli_query($con, $sql);

        return $result;
    }

    function viewproducts(){
        $con = connect();
        $sql = "select * from products where approval = 'no'";
        $result = mysqli_query($con, $sql);

        return $result;
    }

    function addproduct($name, $price, $id){
        $con = connect();
        $sql = "insert into products (id, productname, price) values ('{$id}','{$name}',{$price})";
        $result = mysqli_query($con, $sql);

        if($result){
            return true;
        }
    }

    function approve($id){
        $con = connect();
        $sql = "update products set approval = 'yes' where id='{$id}'";
        $result = mysqli_query($con, $sql);

        if($result){
            return true;
        }
    }


?>