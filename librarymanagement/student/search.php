
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <title>Library Management System</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include("header.php");
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <h4>Search Book</h4>
        </li>
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
      <form action="" method="post" name="form1">
				<div class="form-group">
					<div class="form-row">
					  <div class="col-lg-12">
							<label for="exampleInputName"> <h4>Display and Search</h4> </label>
							<input name="t1" class="form-control" id="exampleInputName" type="text" placeholder="Enter book name" required="required" />
							 <br/>
							 <input class="btn btn-primary btn-block col-lg-6" name="submit1" type="submit" value="Search Books" /> 
					  </div>
				 
						
					</div>
				</div> 
			 </form>
     		<?php
				if(isset($_POST["submit1"]))
				{
					$i=0;
				$res=mysql_query("select * from add_books where books_name like('%$_POST[t1]%')");
					echo "<table class='table table-bordered'>";
						echo "<tr>";
							while($row=mysql_fetch_assoc($res))
							  	{
								  $i=$i+1;
								  echo  "<td>";
								  	?> <img src="../librarian/<?php echo $row["books_image"];?>" height="100" width="100" />
                                  <?php
								  echo "<br>";
								  		echo "<b>".$row["books_name"]."</b>";
										echo "<br>";
								  		echo "<b>"."Available:".$row["available_qty"]."</b>";

								  echo  "</td>";
								  	if($i==3)
									{
										echo "</tr>";
										echo "<tr>";
										$i=0;
										
										}
								  
							    }
						
						echo "</tr>";
					echo "</table>";	
					
					}
					else
				{		
						$i=0;
						$res=mysql_query("select * from add_books");
							echo "<table class='table table-bordered'>";
								echo "<tr>";
									while($row=mysql_fetch_assoc($res))
										{
										  $i=$i+1;
										  echo  "<td>";
											?> <img src="../librarian/<?php echo $row["books_image"];?>" height="100" width="100" />
										  <?php
										  echo "<br>";
												echo "<b>".$row["books_name"]."</b>";
												echo "<br>";
												echo "<b>"."Available:".$row["available_qty"]."</b>";
		
										  echo  "</td>";
											if($i==3)
											{
												echo "</tr>";
												echo "<tr>";
												$i=0;
												
												}
										  
										}
								
								echo "</tr>";
							echo "</table>";	
			}
			
			?>
     		
     
      </div>

    </div>
    
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include("footer.php");?>	
    
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
