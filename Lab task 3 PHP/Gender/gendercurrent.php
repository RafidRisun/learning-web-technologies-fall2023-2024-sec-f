<?php
    echo '
    <html>
    <head>
        <title>Enter email</title>
    </head>
    <body>
        <form method="post" action="gendercurrent.php" enctype="">
            <fieldset>
                <legend>
                    <b>GENDER</b>
                </legend>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Others">Other<br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>';
    $gender = $_REQUEST['gender'];
    echo $gender;


?>