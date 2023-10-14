<?php
$currentpass = $_REQUEST['currentpassword'];
$newpass = $_REQUEST['newpassword'];
$retypepass = $_REQUEST['retypenewpassword'];

if ($currentpass == $newpass) {
    echo "New password same as the old password!";
} else if ($newpass != $retypepass) {
    echo "Retyped password does not match with the new password!";
} else {
    echo "Password changed successfully!";
}

?>