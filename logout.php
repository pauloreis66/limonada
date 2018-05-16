<?php
	Session_start();
	if(IsSet($_SESSION["user_id"])) {
		session_unset();
		session_destroy();
		//Header("Location: index.php");
		Header("Location: login.php");		
	}
	else {
			Header("Location: login.php");
		}
?>