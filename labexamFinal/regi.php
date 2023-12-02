<?php 
    $name = $_POST['name'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $con=mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "insert into employees (Name, ID, Password) values ('{$name}', '{$id}', '{$password}');";
    $result = mysqli_query($con, $sql);

    if($result>0)
    {
        echo ("Employee Added!");
    }

?>