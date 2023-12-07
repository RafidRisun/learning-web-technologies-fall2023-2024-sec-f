<?php
    session_start();
    require_once('../models/userModel.php');
    $id = $_SESSION['id'];

    $user = show($id);

    echo $user.['name'];




?>