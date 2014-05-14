<?php 
	include "classes.php";
	$user = new user();

	if(isset($_POST['UserName'])&&!empty($_POST['UserName']) && isset($_POST['UserMail']) && !empty($_POST['UserMail']) && isset($_POST['UserPassword']) && !empty($_POST['UserPassword'])){
		$user->setUserName($_POST['UserName']);
		$user->setUserMail($_POST['UserMail']);
		$user->setUserPassword(sha1($_POST['UserPassword']));
		$user->InsertUser();
		header("Location: ../index.php?success=1");
	} else {
		header("Location: ../registration.html");
		
	}

?>