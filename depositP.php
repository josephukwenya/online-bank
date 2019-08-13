<?php
	require ("connect.php");
	$amt = $_POST['amt'];
	
	$chkAcct = mysql_query("SELECT * FROM cust WHERE acctNo = '$_POST[actNo]'") or die(mysql_error());
	$count = mysql_num_rows($chkAcct);
	if ($count == 1){
		$sql="INSERT INTO `deposit`(`amount`,`acctNo`,`cDat`)VALUES('$_POST[amt]','$_POST[actNo]', CURDATE())";
		mysql_query($sql) or die(mysql_error());
		echo "Thanks, Account Deposited Successfully. Click <a href='deposit.php'>Here.</a>"." To Make Another Deposit";
		
		$chkSaves = mysql_query("SELECT * FROM saves WHERE acctNo = '$_POST[actNo]'") or die(mysql_error());
		$saveK = mysql_num_rows($chkSaves);
		if ($saveK == 1){
			while($row=mysql_fetch_array($chkSaves)){
				$takAmt = $_POST['amt'];
				$upSql = ("UPDATE saves SET amount = amount + $takAmt WHERE acctNo LIKE '$_POST[actNo]'");
				mysql_query($upSql) or die(mysql_error());
			}
		} else {
			$insertSave="INSERT INTO saves(`amount`,`acctNo`)VALUES('$_POST[amt]','$_POST[actNo]')";
			mysql_query($insertSave) or die(mysql_error());
		}
	} else {
		echo "INVALID ACCOUNT NUMBER";
	}
	
	
?>