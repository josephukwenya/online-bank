<?php
	session_start();
	require ("connect.php");
	$Uid = $_SESSION['Uid'];
	require ("imgP.php");
	
	$actN = $_POST['actNo'];
	$aTyp = $_POST['actTyp'];
	$oN = $_POST['oName'];
	$sx = $_POST['sex'];
	$pNo = $_POST['pNo'];
	$em = $_POST['eMail'];
	$stt = $_POST['state'];
	$add = $_POST['addr'];
	$ocup = $_POST['occu'];
	$cnty = $_POST['country'];
	$bPla = $_POST['bPlac'];
	$nkN = $_POST['nkName'];
	$nkP = $_POST['nkPho'];
	$nkA = $_POST['nkAddr'];
	$nkR = $_POST['nkRel'];
	$bDa = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
	
	if ($sN="" &&	$aTyp="" && $oN="" && $sx ="" && $pNo ="" && $stt="" && $add ="" & $ocup ="" &&	$cnty ="" && $bPla ="" && $nkN="" && $nkP="" && $nkA="" && $nkR=""){
		echo "SOME IMPORTANT FIELDS ARE EMPTY";		
	} else{
		$sql="INSERT INTO cust(acctNo,acctType,sex,sName,oName,state,addr,pNo,eMail,dob,occupatn,nationality,nkName,nkPhon,nkAdd,nkRel,foto,cDat)VALUES('$actN','$aTyp','$sx','$_POST[sName]','$oN','$stt','$add','$pNo','$em','$bDa','$ocup','$cnty','$nkN','$nkP','$nkA','$nkR','$_SESSION[upload_picture]', CURDATE())";
		mysql_query($sql) or die(mysql_error());
		echo "Thanks, Account Created Successfully. Click <a href='openAcct.php'>Here.</a>"." To Create Another Account";
	}
?>