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
                <div class="panel-title">List Of All Account Holders</div>

              </div>
		  				<div class="panel-body">
		  					<?php
                  require("connect.php");
                  $query_result = mysql_query("select * from cust") or die (mysql_error());
                  echo "<table align='center' border = 0 width='400px'>";
                  $i = 1; //set $i to 1 outside the loop
                  while ($row=mysql_fetch_array($query_result)){
                    echo "<td>"."<strong>"."Account No: "."</strong>"."<a href=viewCustP.php?no=$row[acctNo]>$row[acctNo]</a>"."<br />"
                      ."<strong>"."Name: "."</strong>".$row['sName']."<br />"."<br />".
                    "</td>"; //display the records in a <td>
                    $i = $i + 1; //add 1 to $i
                    if ($i == 4) { //when you have echoed 4 <td>'s
                      echo "</tr><tr>"; //echo a new row
                      $i = 1; //reset $i
                    } //close the if
                  }//close the while loop
                  echo "</tr></table>" //close out the table
                ?>
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