<?php 
	session_start();
	session_destroy();
	echo "<script>window.alert('LogOut Successful')</script>";
	echo "<script>window.location='userlogin.php'</script>";
?>