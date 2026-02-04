<?php
session_start();
if(!isset($_SESSION["lib_user"]))
{
	?>
     <script type="text/javascript">
window.location="login.php";
</script>
	<?php
	}
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
          <h4>Book Information</h4>
        </li>
       
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
			 <form action="" method="post" name="form1">
				<div class="form-group">
					<div class="form-row">
					  <div class="col-md-12">
							<label for="exampleInputName"> <h4>Display and Search</h4> </label>
							<input name="t1" class="form-control" id="exampleInputName" type="text" placeholder="Enter book name" required="required" />
							 <br/>
							<input class="btn btn-primary btn-block col-lg-4" name="submit1" type="submit" value="Search Books" /> 
					  </div>
				  
						
					</div>
				</div> 
			 </form>
          <?php
				if(isset($_POST["submit1"]))
				{
							$res=mysql_query("select * from add_books where books_name like('%$_POST[t1]%')
											OR books_author_name like('%$_POST[t1]%') 
											OR books_publication_name like('%$_POST[t1]%')");
					echo "<table class='table-bordered'>";
						echo "<tr>";
							echo "<th>";
							echo "Book name";
							echo "</th>";
							echo "<th>";
							echo "Image";
							echo "</th>";
							echo "<th>";
							echo "Author Name"; 
							echo "</th>";
							echo "<th>";
							echo "Publisher Name"; 
							echo "</th>";
							echo "<th>";
							echo "Purchase Date"; 
							echo "</th>";
							echo "<th>";
							echo "Book Price"; 
							echo "</th>";
							echo "<th>";
							echo "Books Quantity"; 
							echo "</th>";
							echo "<th>";
							echo "Available Quantity"; 
							echo "</th>";
							echo "<th>";
							echo "Delete Books"; 
							echo "</th>";
						echo "</tr>";
						
							while($row=mysql_fetch_assoc($res))
							{
								echo "<tr>";
									echo "<td>";
									echo $row["books_name"]; 
									echo "</td>";
									echo "<td>"; ?> <img src="<?php echo $row["books_image"] ?>" height="100" width="100"> <?php  echo "</td>";
									echo "<td>";
									echo $row["books_author_name"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_publication_name"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_purchase_date"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_price"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_qty"]; 
									echo "</td>";
									echo "<td>";
									echo $row["available_qty"];
									echo "</td>";
									echo "<td>";
									?> <a href="delete_books.php?id=<?php echo $row["id"]; ?>"> Delete Books </a><?php
									echo "</td>";
								echo "</tr>";
							
							
							}
					echo"</table>";
					
					
				}
				else
				{
						$res=mysql_query("select * from add_books");
					echo "<table class='table-bordered'>";
						echo "<tr>";
							echo "<th>";
							echo "Book name";
							echo "</th>";
							echo "<th>";
							echo "Image";
							echo "</th>";
							echo "<th>";
							echo "Author Name"; 
							echo "</th>";
							echo "<th>";
							echo "Publisher Name"; 
							echo "</th>";
							echo "<th>";
							echo "Purchase Date"; 
							echo "</th>";
							echo "<th>";
							echo "Book Price"; 
							echo "</th>";
							echo "<th>";
							echo "Books Quantity"; 
							echo "</th>";
							echo "<th>";
							echo "Available Quantity"; 
							echo "</th>";
							echo "<th>";
							echo "Delete Books"; 
							echo "</th>";
						echo "</tr>";
						
							while($row=mysql_fetch_assoc($res))
							{
								echo "<tr>";
									echo "<td>";
									echo $row["books_name"]; 
									echo "</td>";
									echo "<td>"; ?> <img src="<?php echo $row["books_image"] ?>" height="100" width="100"> <?php  echo "</td>";
									echo "<td>";
									echo $row["books_author_name"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_publication_name"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_purchase_date"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_price"]; 
									echo "</td>";
									echo "<td>";
									echo $row["books_qty"]; 
									echo "</td>";
									echo "<td>";
									echo $row["available_qty"];
									echo "</td>";
									echo "<td>";
									?> <a href="delete_books.php?id=<?php echo $row["id"]; ?>"> Delete Books </a><?php
									echo "</td>";
								echo "</tr>";
							
							
							}
					echo"</table>";
					
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
