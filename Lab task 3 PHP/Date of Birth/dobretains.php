<html>
    <head>
        <title>Enter date of birth</title>
    </head>
    <body>
        <form method="post" action="dobretains.php" enctype="">
            <fieldset>
                <legend>
                    <b>DATE OF BIRTH</b>
                </legend>
                <<table>
                    <tr>
                        <td>
                            dd<br><input type="text" name="date" value="<?php if (isset($_POST['date'])) {
                                                                                        echo $_POST['date'];
                                                                                        } 
                                                        ?>">/
                        </td>
                        <td>
                            mm<br><input type="text" name="month" value="<?php if (isset($_POST['month'])) {
                                                                                        echo $_POST['month'];
                                                                                        } 
                                                        ?>">/
                        </td>
                        <td>
                            yyyy<br><input type="text" name="year" value="<?php if (isset($_POST['year'])) {
                                                                                        echo $_POST['year'];
                                                                                        } 
                                                        ?>">
                        </td>
                        
                    </tr>
                </table><br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>

<?php
    $date = $_REQUEST['date'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];
    echo 'date: '.$date.' month: '.$month.' year: '.$year;
?>
