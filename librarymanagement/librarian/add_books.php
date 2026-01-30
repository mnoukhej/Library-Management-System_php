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
          <a>Add Books Info</a>
        </li>
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
      <form action="" method="post" name="form1" class="col-lg-6" enctype="multipart/form-data">
      	<table class="table table-bordered">
        <tr>
        <td>
        <input name="bname" class="form-control" id="exampleInputUser" type="text" placeholder="Books name" required="required">
        </td>
        </tr>
        
        <tr>
        <td>Book Image
        <input name="f1" class="form-control" id="exampleInputUser" type="file" required="required">
        </td>
        </tr>
        
        <tr>
        <td> 
        <input name="aname" class="form-control" id="exampleInputUser" type="text" aria-describedby="nameHelp" placeholder="Books Author name" required="required">
        </td>
        </tr>
        
        <tr>
        <td> 
        <input name="pname" class="form-control" id="exampleInputUser" type="text"  placeholder="Book Publication name" required="required">
        </td>
        </tr>
        
        <tr>
        <td> 
        <input name="bpurchase" class="form-control" id="exampleInputUser" type="text" aria-describedby="nameHelp" placeholder="DD/MM/YYYY" required="required">
        </td>
        </tr>
        
        <tr>
        <td>
        <input name="bprice" class="form-control" id="exampleInputUser" type="text" aria-describedby="nameHelp" placeholder="Book Price" required="required">
        </td>
        </tr>
        
        <tr>
        <td> 
        <input name="bqty" class="form-control" id="exampleInputUser" type="text" aria-describedby="nameHelp" placeholder="Books Quantity" required="required">
        </td>
        </tr>
        
        <tr>
        <td> 
        <input name="aqty" class="form-control" id="exampleInputUser" type="text" aria-describedby="nameHelp" placeholder="Available Quantity" required="required">
        </td>
        </tr>
        
        <tr>
        <td> <input class="btn btn-primary btn-block col-lg-4" name="submit1" type="submit" value="Insert Book Details" />
        </td>
        </tr>
        </table>
        </form> 
      </div>

    </div>
    
    <?php
	 if(isset($_POST['submit1']))
	{
		$tm=md5(time());
		$fnm=$_FILES["f1"]["name"];
		$dst="./books_image/".$tm.$fnm;
		$dst1="books_image/".$tm.$fnm;
		move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
	$sql_ins=mysql_query("insert into add_books values('','$_POST[bname]','$dst1','$_POST[aname]','$_POST[pname]','$_POST[bpurchase]','$_POST[bprice]','$_POST[bqty]','$_POST[aqty]','$_SESSION[lib_user]')");
	
	?>
    <script type="text/javascript">
    alert("Books inseted successfully");
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
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
