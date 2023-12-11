<?php
    session_start();
    require_once('../models/userModel.php');
    $currentuser = $_SESSION['username'];
    $user=getUser($currentuser);
?>
<html>
    <body>
        User Name: <?php echo $user['username'] ?><br>
        Type:    <?php echo $user['type'] ?>   <br>
    </body>
</html>