<?php
    echo '
    <html>
        <head>
            <title>Enter name</title>
        </head>
        <body>
            <form method="post" action="namecurrent.php" enctype="">
                <fieldset>
                    <legend>
                        <b>NAME</b>
                    </legend>
                    <input type="text" name="name" value=""><br>
                    <hr>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>
        </body>
    </html>';
    $name = $_REQUEST['name'];
    echo $name;


?>