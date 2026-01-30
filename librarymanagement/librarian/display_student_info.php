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
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
          <?php
		  	$res=mysql_query("select * from student_registration");
			echo "<table class='table-bordered'>";
			echo "<tr>";
			echo "<th>";echo "Firstname"; echo "</th>";
			echo "<th>";echo "Lastname"; echo "</th>";
			echo "<th>";echo "Username"; echo "</th>";
			echo "<th>";echo "Email"; echo "</th>";
			echo "<th>";echo "Contact"; echo "</th>";
			echo "<th>";echo "Semester"; echo "</th>";
			echo "<th>";echo "Enrollment no"; echo "</th>";
			echo "<th>";echo "Status"; echo "</th>";
			echo "<th>";echo "Approve"; echo "</th>";
			echo "<th>";echo "Not Approve"; echo "</th>";
	echo "</tr>";	
	
			while($row=mysql_fetch_assoc($res))
			{
				echo "<tr>";
			echo "<td>";echo $row["firstname"]; echo "</td>";
			echo "<td>";echo $row["lastname"]; echo "</td>";
			echo "<td>";echo $row["username"]; echo "</td>";
			echo "<td>";echo $row["email"]; echo "</td>";
			echo "<td>";echo $row["contact"]; echo "</td>";
			echo "<td>";echo $row["sem"]; echo "</td>";
			echo "<td>";echo $row["enrollmentno"]; echo "</td>";
			echo "<td>";echo $row["status"]; echo "</td>";
			echo "<td>";?> <a href="approve.php?id=<?php echo $row["id"] ?>">Approve</a><?php echo "</td>";
			echo "<td>";?> <a href="notapprove.php?id=<?php echo $row["id"] ?>">Not Approve</a><?php echo "</td>";
	echo "</tr>";	
				
				}
	echo "</table>";			
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
