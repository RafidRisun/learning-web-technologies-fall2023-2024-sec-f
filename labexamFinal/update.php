<?php 
    $name = $_POST['name'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $con=mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "update employees set Name = '{$name}', Password '{$password}'=  where ID = '{$id}';";
    $result = mysqli_query($con, $sql);

    if($result>0)
    {
        echo ("Employee Updated!");
    }

?>