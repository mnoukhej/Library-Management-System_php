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
          <h4>Issue Books </h4>
        </li>
       
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
			 
			<form action="" method="post" name="form1">
					<table class="table table-bordered">
						<tr>
							<td>
								<select name="enrollment" class="custom-select">

									<?php
										$res=mysql_query("select enrollmentno from student_registration");
											while($row=mysql_fetch_assoc($res))
												{
													echo"<option>";
													echo $row["enrollmentno"];
													echo"</option>";
												}
									?>
								</select>
							</td>
							<td>
									<input class="btn btn-primary btn-block col-lg-4" name="submit1" type="submit" value="Search" />
							</td>
						</tr>
					</table>	
					<?php
						if(isset($_POST["submit1"]))
						{
							$res5=mysql_query("select * from student_registration where enrollmentno='$_POST[enrollment]'");
									while($row5=mysql_fetch_assoc($res5))
									{
											$firstname=$row5["firstname"];
											$lastname=$row5["lastname"];
											$username=$row5["email"];
											$email=$row5["email"];
											$contact=$row5["contact"];
											$semester=$row5["sem"];
											$enrollment=$row5["enrollmentno"];
											$_SESSION["enrollment"]=$enrollment;
											$_SESSION["uname"]=$username;
									}
							
								
							
							?>
								<table class="table table-bordered">
                                  <tr>
										<td>
										<input name="enrollment" class="form-control" id="exampleInputUser" type="text" placeholder="Enrollment number" disabled="" value="<?php echo $enrollment; ?>">
										</td>
									</tr>
									
									<tr>
										<td>
										<input name="studentname" class="form-control" id="exampleInputUser" type="text" placeholder="Student name" value="<?php echo $firstname." ". $lastname; ?>">
										</td>
									</tr>
									<tr>
										<td>
										<input name="studentsem" class="form-control" id="exampleInputUser" type="text" placeholder="Student semester" value="<?php echo $semester; ?>" required="">
										</td>
									</tr>
									<tr>
										<td>
										<input name="studentcontact" class="form-control" id="exampleInputUser" type="text" placeholder="Student contact" value="<?php echo $contact; ?>" required="">
										</td>
									</tr>
									<tr>
										<td>
										<input name="studentemail" class="form-control" id="exampleInputUser" type="text" placeholder="Student Email" value="<?php echo $email; ?>" required="">
										</td>
									</tr>
									<tr>
										<td>
											<select name="booksname" class="custom-select">

												<?php
													$res=mysql_query("select books_name from add_books");
														while($row=mysql_fetch_assoc($res))
															{
																echo"<option>";
																echo $row["books_name"];
																echo"</option>";
															}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td>
										<input name="bookissuedate" class="form-control" id="exampleInputUser" type="text" placeholder="Beook Issue Date" value="<?php echo date("d-M-y"); ?>">
										</td>
									</tr>
									<tr>
										<td>
										<input name="studentusername" class="form-control" id="exampleInputUser" type="text" placeholder="Student username" value="<?php echo $username; ?>" disabled="">
										</td>
									</tr>
									<tr>
										<td>
										<input class="btn btn-primary btn-block col-lg-12" name="submit2" type="submit" value="Issue Book" />
										</td>
									</tr>
								</table>	
							<?php
						}
					?>
			</form>
					<?php
							if(isset($_POST['submit2']))
								{
									$qty=0;
									$res1=mysql_query("select * from  add_books where books_name='$_POST[booksname]'");
										while($row1=mysql_fetch_assoc($res1))
										{
											$qty=$row1["available_qty"];
										}
									if($qty==0)
									{
										?>
										  <div class=" alert alert-danger col-lg-12 col-lg-push-0">
											<strong style="color:red">This book are not available in stock.</strong>
										</div>
                                       <?php  
                                        
										}
									else
										{
											mysql_query("insert into issue_books values('','$_SESSION[enrollment]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[booksname]','$_POST[bookissuedate]','','$_SESSION[uname]')");	
									mysql_query("update add_books set available_qty=available_qty-1 where books_name='$_POST[booksname]'");
					?>
    			<script type="text/javascript">
    			alert("Books Issue successfully");
				window.location.href=window.location.href;
   			    </script>
    				<?php
									
					}
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
