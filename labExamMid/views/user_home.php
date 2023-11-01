<?php 
    require_once('../controller/logincheck.php');
	$id = $_REQUEST ['id'];
	$user = getUser($id);
	$name = $user['username'];
?>

<center>
	<h1>Welcome <?php echo $name ?>!</h1>
	<a href="profile.html">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="login.html">Logout</a>
</center>