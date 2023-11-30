<?php 
    $term = $_POST['std'];
    $con=mysqli_connect('localhost', 'root', '', 'users');
    $sql = "select * from users where username like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    // $content = "<table border=1>
    //             <tr>
    //                 <td>ID</td>
    //                 <td>Name</td>
    //                 <td>Email</td>
    //             </tr>";
    // $rows = "";
    // while($row = mysqli_fetch_assoc($result)){
    //         $rows .="<tr>
    //                     <td>{$row['id']}</td>
    //                     <td>{$row['username']}</td>
    //                     <td>{$row['email']}</td>
    //                 </tr>";
    // }

    // echo $content . $rows . "</table>";
    $ar = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($ar, $row);
    }
    echo json_encode($ar);

?>