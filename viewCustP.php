<!DOCTYPE html>
<html>
  <head>
    <title>Banking Operation</title>
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
	                 <h1><a href="index.html">Banking Operation</a></h1>
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
                      require ("connect.php");
                      $Uid=$_GET['no'];
                      $sqlPass=mysql_query("SELECT *
                      FROM `cust`
                      WHERE acctNo LIKE '$Uid'")or die(mysql_error());
                      while($row=mysql_fetch_array($sqlPass)){
                        echo "<table align='left'>";
                        echo "<tr>"."<td>"."<strong>"."<img src='upload/$row[foto]' width='100' height='130' />"."</td>"."<td>".""."</td>";
                        echo "</table>";
                        echo "<table width='300px' />";
                        echo "<tr>"."<td>"."<strong>"."Name: "."</strong>"."</td>"."<td>".$row['sName']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Other Name: "."</strong>"."</td>"."<td>".$row['oName']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Account Type: "."</strong>"."</td>"."<td>".$row['acctType']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Sex: "."</strong>"."</td>"."<td>".$row['sex']."</td>";
                        echo "<tr>"."<td>"."<strong>"."State: "."</strong>"."</td>"."<td>".$row['state']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Address: "."</strong>"."</td>"."<td>".$row['addr']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Phone No: "."</strong>"."</td>"."<td>".$row['pNo']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Email: "."</strong>"."</td>"."<td>".$row['eMail']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Date of Birth: "."</strong>"."</td>"."<td>".$row['dob']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Occupatoin: "."</strong>"."</td>"."<td>".$row['occupatn']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Country: "."</strong>"."</td>"."<td>".$row['nationality']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Next of Kin Name: "."</strong>"."</td>"."<td>".$row['nkName']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Occupatoin: "."</strong>"."</td>"."<td>".$row['nkPhon']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Country: "."</strong>"."</td>"."<td>".$row['nkPhon']."</td>";
                        echo "<tr>"."<td>"."<strong>"."Next of Kin Name: "."</strong>"."</td>"."<td>".$row['nkRel']."</td>";
                        echo "<tr>"."<td>"."</td>"."<td>"."</td>";
                        echo "<tr>"."<td>"."</td>"."<td>"."</td>";
                        echo "</table>";
                        echo "<center>"."<input name='button3' type='submit' class='submit' onclick='printer()' value='Print Document' />"."</center>";
                      }
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
    <script>
      function printer(){
        window.print();
      }
    </script>
  </body>
</html>