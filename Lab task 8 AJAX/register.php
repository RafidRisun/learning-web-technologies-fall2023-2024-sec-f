<?php
    require_once('db.php');

    $empname = $_POST['empname'];
    $comname = $_POST['comname'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $con = getConnection();
    $sql = "insert into employer (empname, comname, contact, username, password) values ('{$empname}', '{$comname}', '{$contact}', '{$username}', '{$pass}')";
    $result = mysqli_query($con, $sql);



?>