<?php
    require_once('../models/productModel.php');

    $id=$_REQUST['id'];

    $status = approve($id);
    if($status){
        echo "Approved";
    }

?>