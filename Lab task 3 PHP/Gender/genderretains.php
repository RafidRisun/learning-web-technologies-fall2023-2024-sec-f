<html>
    <head>
        <title>Enter email</title>
    </head>
    <body>
        <form method="post" action="genderretains.php" enctype="">
            <fieldset>
                <legend>
                    <b>GENDER</b>
                </legend>
                <input type="radio" name="gender" value="<?php if (isset($_POST['Male'])) {
                                                                                        echo $_POST['Male'];
                                                                                        } 
                                                        ?>">Male
                <input type="radio" name="gender" value="<?php if (isset($_POST['Female'])) {
                                                                                        echo $_POST['Female'];
                                                                                        } 
                                                        ?>">Female
                <input type="radio" name="gender" value="<?php if (isset($_POST['Other'])) {
                                                                                        echo $_POST['Other'];
                                                                                        } 
                                                        ?>">Other<br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>

<?php
    $gender = $_REQUEST['gender'];
    echo $gender;

?>