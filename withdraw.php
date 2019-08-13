<!DOCTYPE html>
<html>
  <head>
    <title>Online Banking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <script language="JavaScript" type="text/javascript">
      <!--
      function valForm (track){
      // Checks if any of the text boxes is empty
      if ((withdraw.amt.value=="")||(deposit.actNo.value=="")){
        alert("SOME IMPORTANT FIELD IS LEFT EMPTY!!!");
        withdraw.actNo.focus();
            return false;
        }
        //  END 
          return true;
      }
//-->
</script>
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
                <div class="panel-title">Account Balance Report</div>

              </div>
		  				<div class="panel-body">
		  					 <form action="withdrawP.php" method="post" enctype="multipart/form-data" name="withdraw" id="form1" onsubmit="return valForm(this);">
                    <table width="445" border="0">
                      <tr>
                        <td width="103" nowrap="nowrap" style="text-align:right">ACCOUNT NO</td>
                        <td colspan="3"><input name="actNo" type="text" class="input" /></td>
			<td></td>
                        </tr>
			<tr>
				<td></td>
			</tr>
                      <tr>
                        
                        <td style="text-align:right"><label for="textfield">Amount</label></td>
                          <td><input name="amt" type="text" class="input" id="textfield" /></td>
                        <td width="102">&nbsp;</td>
                        </tr>
                      <tr>
                       
                        <td width="151" style="text-align:right"><input name="button" type="submit" class="" id="button" value="Submit" /></td>
                        <td width="71"><input name="button2" type="reset" class="" id="button2" value="Reset" /></td>
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