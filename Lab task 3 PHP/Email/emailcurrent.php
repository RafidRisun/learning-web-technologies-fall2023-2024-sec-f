<?php
    echo '
    <html>
        <head>
            <title>Enter email</title>
        </head>
        <body>
            <form method="post" action="emailcurrent.php" enctype="">
                <fieldset>
                    <legend>
                        <b>EMAIL</b>
                    </legend>
                    <input type="email" name="email" value=""><br>
                    <hr>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>
        </body>
    </html>';
    $email = $_REQUEST['email'];
    echo $email;


?>