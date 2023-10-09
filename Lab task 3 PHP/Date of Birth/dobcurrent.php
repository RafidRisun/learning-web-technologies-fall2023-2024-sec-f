<?php
    echo '
    <html>
    <head>
        <title>Enter date of birth</title>
    </head>
    <body>
        <form method="post" action="dobcurrent.php" enctype="">
            <fieldset>
                <legend>
                    <b>DATE OF BIRTH</b>
                </legend>
                <table>
                    <tr>
                        <td>
                            dd<br><input type="text" name="date" value="">/
                        </td>
                        <td>
                            mm<br><input type="text" name="month" value="">/
                        </td>
                        <td>
                            yyyy<br><input type="text" name="year" value="">
                        </td>
                        
                    </tr>
                </table>
                <br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>';
$date = $_REQUEST['date'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
echo 'date: '.$date.' month: '.$month.' year: '.$year;


?>