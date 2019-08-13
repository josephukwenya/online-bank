<?php
	if ($_POST['uName'] ="prog" && $_POST['pWord'] ="prog"){
		header("location: admin.php");
	} else {
		echo "INVALID PASSWORD. Click <a href='fTransfer.php'>Here.</a>"." re-enter the login details";
	}
?>