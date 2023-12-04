<?php 
    session_start();
    require_once('../models/personsModel.php');

    $email = $_SESSION['currentEmail'];
    $person = show($email);


?>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <?php echo $person['name'] ?> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone:
                    </td>
                    <td>
                        <?php echo $person['phone'] ?> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <?php echo $person['email'] ?> 
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>




