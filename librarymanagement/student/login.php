<?php
session_start();
include("../connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
	.header-main { 
	background: #005195 url(../images/header-bg.jpg) repeat-x top left;
	height: 94px;
	}
	
	
#header-main  #logo
{}	
#header-main  #logo  img{ 
	
	width: 130px; 
	height: 60px;
	float:left;
	margin:10px 0px 0px 0px;
	padding:0px;
	float:left;
	border-radius: 70px ;
  -moz-border-radius: 70px ;
  -webkit-border-radius: 70px ;
	}
 span#companyname
{

font-size:35px;
font-weight:bold;
color:#fff;
float:left;
margin-right:305px;
margin-top:16px;
line-height:25px;
padding:0px;
float:right;



}

</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Smart Academy Library System </title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark header-main">
  <div class="container">
  <div id="logo" style="margin-top:17px;">
  <?php 
					
				   $sql = "select * from setting where id = '1'";
				   $header =  mysqli_query($conn, $sql);
				   $rowheader = mysqli_fetch_assoc($header);
				   if($rowheader['logo']!="")
				   {
				   echo '<img src="../images/'.$rowheader['logo'].'">';
				   }else
				   {
				   
				   
				   }
				   ?>
                  <span id="companyname" style="margin-top:37px;"><?php echo $rowheader['webtitle'] ;?> </span> 

  </div>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"> Student Login</div>
      <div class="card-body">
        <form action="" method="post" name="form1">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
         <input class="btn btn-primary btn-block" name="submit1" type="submit" value="Login" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
        <br/>
        <?php
if(isset($_POST['submit1']))
{
	$count=0;
	$res=mysqli_query($conn,"select * from student_registration where email='$_POST[email]' && password='$_POST[password]' && status='yes'");
	$count=mysqli_num_rows($res);
	
	if($count==0)
	{
	 ?>
     <div class=" alert alert-danger col-lg-12 col-lg-push-0">
<strong style="color:red">Invalid Email address or Password.</strong>
</div>
<?php 	
	}
	else
	{
		$_SESSION["username"]=$_POST["email"];
	?>
    <script type="text/javascript">
    window.location="my_issued_books.php";
    </script>
    <?php	
	}
}
?>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
