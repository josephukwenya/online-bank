<?php
	require ("connect.php");
	$amt = $_POST['amt'];
	
	$chkAcct = mysql_query("SELECT * FROM cust WHERE acctNo = '$_POST[actNo]'") or die(mysql_error());
	$count = mysql_num_rows($chkAcct);
	if ($count == 1){
		$chkSaves = mysql_query("SELECT * FROM saves WHERE acctNo = '$_POST[actNo]'") or die(mysql_error());
		$KSav = mysql_num_rows($chkSaves);
		if ($KSav == 1){
			while($row=mysql_fetch_array($chkSaves)){
				$takAmt = $row['amount'];
				//."the previous balance"
				if ($amt < $takAmt){
					$upSql = ("UPDATE saves SET amount = amount - $amt WHERE acctNo LIKE '$_POST[actNo]'");
					echo $upSql;
					mysql_query($upSql) or die(mysql_error());
					
					$sql="INSERT INTO withdraw(`actNo`,`amount`,cDat)VALUES('$_POST[amt]','$_POST[actNo]', CURDATE())";
					mysql_query($sql) or die(mysql_error());
					echo "Thanks, Withdrawal Made Successfully. Click <a href='withdraw.php'>Here.</a>"." To Make Another Withdrawal";
				} else {
					echo "You cannot withdraw below your balance. Click "."<a href='withdraw.php'>Here.</a>"." To Go Back";
				}				
			}
		}
	} else {
		echo "INVALID ACCOUNT NUMBER. Click "."<a href='withdraw.php'>Here.</a>"." To Go Back";
	}
	
	
?>