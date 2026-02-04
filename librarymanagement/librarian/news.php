<?php
session_start();
include("../connection/connection.php");
?>
<script type="text/javascript">
            $(function () {
               $('.datepicker').datepicker()
            });
        </script>
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
   <link href="../css/datepicker.css" rel="stylesheet">
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
          <h2>Notice</h2>
        </li>
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
     	<form action="" method="post" name="form1" class="col-lg-6">
        	<table class="table table-bordered" >
            <tr>
            	<td><input class="form-control"  name="ndate" placeholder="MM/DD/YYY" type="text"/></td>
            </tr>
            <tr>
            	<td><input type="text" name="description" class="form-control" placeholder="Enter  notice details" /></td>
            </tr>
            <tr>
            	<td><input class="btn btn-primary btn-block" name="submit1" type="submit" value="Send" /></td>
            </tr>
            
            </table>
        </form>
      </div>

    </div>
    <?php
	 if(isset($_POST['submit1']))
	{
		$sql_ins=mysql_query("insert into news values('','$_POST[ndate]','$_POST[description]')");
	
	?>
    <script type="text/javascript">
    alert("Notice inseted successfully");
    </script>
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
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
