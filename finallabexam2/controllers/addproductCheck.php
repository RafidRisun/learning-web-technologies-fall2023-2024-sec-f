<?php
    require_once('../models/productModel.php');
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id = uniqid();

    $status=addproduct($name, $price, $id);
    if($status){
        echo "Successfully Added!";
    }
    else{
        echo "Failed :(";
    }
    

?>