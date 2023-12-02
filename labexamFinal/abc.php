<?php 
    $term = $_POST['std'];
    $con=mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from employees where Name like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    $ar = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($ar, $row);
    }
    echo json_encode($ar);

?>
