<html>
    <head>
        <title>Enter name</title>
    </head>
    <body>
        <form method="post" action="nameretains.php" enctype="">
            <fieldset>
                <legend>
                    <b>NAME</b>
                </legend>
                <input type="text" name="name" value="<?php if (isset($_POST['name'])) {
                                                                                        echo $_POST['name'];
                                                                                        } 
                                                        ?>"><br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>

<?php
    $name = $_REQUEST['name'];
    echo $name;
?>
