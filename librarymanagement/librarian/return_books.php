<?php
session_start();
include("../connection/connection.php");
?>
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
          <h2>Return Book</h2>
        </li>
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
      <form action="" method="post" name="form1" class="col-lg-12">
      	<table class="table table-bordered">
        <tr>
        <td>
       <select name="enrollment" class="custom-select">
       								<?php
											$res=mysql_query("select student_enrollment from issue_books where books_return_date=''");
												while($row=mysql_fetch_assoc($res))
													{
														echo"<option>";
														echo $row["student_enrollment"];
														echo"</option>";
													}
									?>
       
       </select>
        </td>
        <td> <input class="btn btn-primary btn-block col-lg-6" name="submit1" type="submit" value="Search" />
        </tr>
       
        <tr>
        
        </td>
        </tr>
        </table>
        </form> 
      </div>

    </div>
    
    <?php
	 if(isset($_POST['submit1']))
	{
		$res=mysql_query("select * from issue_books where student_enrollment='$_POST[enrollment]'");
			echo "<table class='table-bordered'>";
						echo "<tr>";
							echo "<th>";
							echo "Student enrollment";
							echo "</th>";
							echo "<th>";
							echo "Student name";
							echo "</th>";
							echo "<th>";
							echo "Student Semester"; 
							echo "</th>";
							echo "<th>";
							echo "Student Contact"; 
							echo "</th>";
							echo "<th>";
							echo "Student Email"; 
							echo "</th>";
							echo "<th>";
							echo "Book Name"; 
							echo "</th>";
							echo "<th>";
							echo "Books Issue Date"; 
							echo "</th>";
							echo "<th>";
							echo "Books Returm Date"; 
							echo "</th>";
						echo "</tr>";
						
			while($row=mysql_fetch_assoc($res))
							{
									echo "<tr>";
												echo "<td>";echo $row["student_enrollment"]; echo "</td>";
												echo "<td>";echo $row["student_name"]; echo "</td>";
												echo "<td>";echo $row["student_sem"]; echo "</td>";
												echo "<td>";echo $row["student_contact"]; echo "</td>";
												echo "<td>";echo $row["student_email"]; echo "</td>";
												echo "<td>";echo $row["books_name"]; echo "</td>";
												echo "<td>";echo $row["books_issue_date"]; echo "</td>";
												echo "<td>";?><a href="return.php?id=<?php echo $row["id"];?>">Return Book</a>
                                                 <?php echo "</td>";
												
								echo "</tr>";	
				
								
								}
	?>

    <?php
	}
	?>
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
