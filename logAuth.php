<?php

session_start();
require("assets/conf/config.php"); 

if(isset($_POST['login']))
{
	$uname 	= $_POST['uname'];
	$pass 	= md5($_POST['pass']);

	// $users 	= $db->query("SELECT * FROM users WHERE username='$uname' AND password='$pass' ");
	// $data 	= $users->fetch_assoc();

	if ($uname == 'admin' && $pass == md5('admin')) {
		
		$_SESSION['username'] = 'admin';
		
		echo "<meta http-equiv='refresh' content='0; url=$hosted' />";

	}else{

		echo "<meta http-equiv='refresh' content='0; url=".$hosted."error/Data-Not-Authentic' />";		

	}
}