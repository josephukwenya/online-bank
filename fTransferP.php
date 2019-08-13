<?php
session_start();
	require ("connect.php");
	$uid = $_SESSION['Uid'];
	$amt = $_POST['amt'];
	
	$chkAcct = mysql_query("SELECT * FROM cust WHERE acctNo = '$_POST[SactNo]'") or die(mysql_error()); //senda
	$fCount = mysql_num_rows($chkAcct);
	if ($fCount == 1){
		$frstAct = mysql_query("SELECT * FROM cust WHERE acctNo = '$_POST[recActNo]'") or die(mysql_error()); // receva
		$sCount = mysql_num_rows($frstAct);
		if ($sCount == 1){
			//sender 
			$chkSaves = mysql_query("SELECT * FROM saves WHERE acctNo = '$_POST[SactNo]'") or die(mysql_error()); //senda
			$KSav = mysql_num_rows($chkSaves);
			if ($KSav == 1){
				$upSql = ("UPDATE saves SET amount = amount - $_POST[amt] WHERE acctNo LIKE '$_POST[SactNo]'");
				mysql_query($upSql) or die(mysql_error());
				$sql="INSERT INTO withdraw(`actNo`,`amount`,cDat)VALUES('$amt','$_POST[SactNo]', CURDATE())";
				mysql_query($sql) or die(mysql_error());
			}
			//receiver
			$depSql="INSERT INTO deposit(`amount`,`acctNo`, `uid`)VALUES('$_POST[amt]','$_POST[recActNo]', 'uid')";
			mysql_query($depSql) or die(mysql_error());
			$saveRec = mysql_query("SELECT * FROM saves WHERE acctNo = '$_POST[recActNo]'") or die(mysql_error());
			$savReK = mysql_num_rows($saveRec);
			if ($savReK == 1){
				while($rowR=mysql_fetch_array($chkSaves)){
					$takAmt = $_POST['amt'];
					$upSql = ("UPDATE saves SET amount = amount + $amt WHERE acctNo LIKE '$_POST[recActNo]'");
					mysql_query($upSql) or die(mysql_error());
				}
			} else {
				$insertSave="INSERT INTO saves(`amount`,`acctNo`)VALUES('$_POST[amt]','$_POST[recActNo]')";
				mysql_query($insertSave) or die(mysql_error());
			}
		} echo "Thanks, Fund Transfer Made Successfully. Click <a href='fTransfer.php'>Here.</a>"." To Make Another Transaction";
	} else {
		echo "INVALID ACCOUNT NUMBER. Click "."<a href='fTransfer.php'>Here.</a>"." To Go Back";
	}
	
	
?>