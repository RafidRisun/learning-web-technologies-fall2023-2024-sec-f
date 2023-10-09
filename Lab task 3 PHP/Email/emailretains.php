<html>
    <head>
        <title>Enter name</title>
    </head>
    <body>
        <form method="post" action="emailretains.php" enctype="">
            <fieldset>
                <legend>
                    <b>EMAIL</b>
                </legend>
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) {
                                                                                        echo $_POST['email'];
                                                                                        } 
                                                        ?>"><br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>

<?php
    $email = $_REQUEST['email'];
    echo $email;
?>
