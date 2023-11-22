<?php
    require_once('db.php');

    $username = $_POST['username'];

    $con = getConnection();
    $sql = "delete from employer where username = '{$username}'";
    $result = mysqli_query($con, $sql);


?>