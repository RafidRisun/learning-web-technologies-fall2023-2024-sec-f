<?php
    require_once('db.php');

    $empname = $_POST['empname'];
    $comname = $_POST['comname'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $con = getConnection();
    $sql = "update employer set empname = '{$empname}', comname = '{$comname}', contact = '{$contact}', password = '{$pass}' where username = '{$username}'";
    $result = mysqli_query($con, $sql);


?>