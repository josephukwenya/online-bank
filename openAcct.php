<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Online Banking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html" style="color:red">Online Banking System</a></h1>
	              </div>
	           </div>
	           
	          
	      
	        </div>
	     </div>
	</div>


    <div class="page-content">

    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Menu</a></li>
                    <li><a href="withdraw.php"><i class="glyphicon glyphicon-calendar"></i> WITHDRAW</a></li>
                    <li><a href="bal.php"><i class="glyphicon glyphicon-stats"></i> BALANCE</a></li>
                    <li><a href="deposit.php"><i class="glyphicon glyphicon-list"></i> DEPOSIT</a></li>
                    <li><a href="fTransfer.php"><i class="glyphicon glyphicon-record"></i> TRANSFER</a></li>
                    <li><a href="openAcct.php"><i class="glyphicon glyphicon-pencil"></i> OPEN ACCOUNT</a></li>
                    
                    
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-10">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
                <div class="panel-title">Open Account</div>

              </div>
		  				<div class="panel-body">
		  					<form action="openAcctP.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="445" border="0">
              <tr>
                <td nowrap="nowrap" style="text-align:right">ACCOUNT NO</td>
                <td><input readonly="readonly" name="actNo" type="text" class="input" id="textfield3" value="<?php echo $_SESSION["Uid"] = time(); ?>"/></td>
                <td style="text-align:right">ACCT TYPE</td>
                <td><select name="actTyp" class="input" id="select">
                    <option value="">Select Type</option>
                    <option value="current">Current</option>
                    <option value="savings">Savings</option>
                      </select></td>
                </tr>
                <tr>
                  <td width="103" style="text-align:right">SURNAME</td>
                  <td width="151"><input name="sName" type="text" class="input" id="textfield" /></td>
                  <td width="71" style="text-align:right">OTHERNAMES</td>
                  <td width="102"><input name="oName" type="text" class="input" id="textfield2" /></td>
                  </tr>
                <tr>
                  <td style="text-align:right">SEX</td>
                  <td><select name="sex" class="input" id="select2">
                      <option value="f">Female</option>
                      <option value="m">Male</option>
                        </select></td>
                  <td style="text-align:right">PHONE NO</td>
                  <td><input name="pNo" type="text" class="input" id="textfield4" /></td>
                  </tr>
                <tr>
                  <td style="text-align:right">EMAIL ADDR</td>
                  <td><input name="eMail" type="text" class="input" id="textfield5" /></td>
                  <td style="text-align:right">STATE</td>
                  <td><?php
                      require("connect.php");
                      $sql=mysql_query("SELECT * FROM state") or die(mysql_error());
                      echo '<select name="state" style="width:120px" class="input">';?>
                      <option value=''>Select State</option>
                      <?php while($row=mysql_fetch_array($sql)){?>
                      <option value=<?php echo $row['id']; ?>><?php echo $row['state']; ?></option>
                      <?php }
                    ?></td>
                </tr>
              <tr>
                <td style="text-align:right">ADDRESS</td>
                <td><input name="addr" type="text" class="input" id="textfield6" /></td>
                <td style="text-align:right">OCCUPATION</td>
                <td><input name="occu" type="text" class="input" id="textfield7" /></td>
                </tr>
              <tr>
                <td style="text-align:right">NATIONALITY</td>
                <td><?php
                  $sql=mysql_query("SELECT * FROM country") or die(mysql_error());
                  echo '<select class="input" name="country" style="width:120px" id="search-text">';?>
                  <?php echo "<option value=''>Select Country</option>";?>
                  <?php while($row=mysql_fetch_array($sql)){?>
                  <option value=<?php echo $row['name']; ?>><?php echo $row['name']; ?></option>
                  <?php }
                ?></td>
                <td style="text-align:right">BIRTH PLACE</td>
                <td><input name="bPlac" type="text" class="input" id="textfield8" /></td>
                </tr>
              <tr>
                <td colspan="2" style="text-align: right">DATE OF BIRTH</td>
                <td colspan="2" style="text-align: left"><?php 
                    $start = 1; 
                    $end = 31;
                    echo '<select class="input" name="day">'; 
                    for($i = $start; $i <= $end; $i++){ 
                        echo "<option value='$i'>{$i}</option>"; 
                    } 
                    echo '</select>';
                    ?>
                      <?php
                    // year 
                    $start = 1; 
                    $end = 12;
                    echo '<select class="input" name="month">'; 
                    for($i = $start; $i <= $end; $i++){ 
                        echo "<option value='$i'>{$i}</option>"; 
                    } 
                    echo '</select>';
                    ?>
                                      
                      <?php
                    // year 
                    $start = 1970; 
                    //$end = intval(date('Y')); 
                    $end = date('Y');
                    echo '<select class="input" name="year">'; 
                    for($i = $start; $i <= $end; $i++){ 
                        echo "<option value='$i'>{$i}</option>"; 
                    } 
                    echo '</select>';
                    ?>
                  </td>
                </tr>
              <tr>
                <td style="text-align:center" colspan="4">&nbsp;</td>
                </tr>
              <tr>
                <td style="text-align:center" colspan="4">NEXT OF KIN DETAILS</td>
                </tr>
              <tr>
                <td style="text-align:right">NAME</td>
                <td><input name="nkName" type="text" class="input" id="textfield9" /></td>
                <td style="text-align:right">ADDRESS</td>
                <td><input name="nkAddr" type="text" class="input" id="textfield10" /></td>
                </tr>
              <tr>
                <td style="text-align:right">PHONE NO</td>
                <td><input name="nkPho" type="text" class="input" id="textfield11" /></td>
                <td style="text-align:right">RELATIONSHIP</td>
                <td><input name="nkRel" type="text" class="input" id="textfield12" /></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td style="text-align:right">PASSPORT</td>
                <td colspan="2"><input name="upload_picture" type="file" class="input" id="fileField" /></td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td style="text-align:right"><input name="button" type="submit" class="" id="button" value="Submit" /></td>
                <td><input name="button2" type="reset" class="" id="button2" value="Reset" /></td>
                <td>&nbsp;</td>
                </tr>
              </table>
            </form>

		  				</div>
		  			</div>
		  		</div>

		  	
		  	</div>


		  	
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
     
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/a.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>