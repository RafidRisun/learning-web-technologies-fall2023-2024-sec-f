<?php
    echo '
    <html>
    <head>
        <title>Enter Blood Group</title>
    </head>
    <body>
        <form method="post" action="bloodgroup.php" enctype="">
            <fieldset>
                <legend>
                    <b>BLOOD GROUP</b>
                </legend>
                <input type="option" name="blood" value="a+">A+
                <input type="option" name="blood" value="b+">B+
                <input type="option" name="blood" value="ab+">AB+
                <br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>';
$bloodgroup = $_REQUEST['blood'];
echo $bloodgroup;


?>