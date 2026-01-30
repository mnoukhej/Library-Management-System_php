<?php
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
				   $header =  mysql_query($sql);
				   $rowheader = mysql_fetch_array($header);
				   if($rowheader['logo']!="")
				   {
				   echo '<img src="../images/'.$rowheader['logo'].'">';
				   }else
				   {
				   
				   
				   }
				   ?>
                  <span id="companyname" style="margin-top:37px;"><?php echo $rowheader['webtitle'] ;?> </span> 

  </div>
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Student Registration Form</div>
      <div class="card-body">
        <form action="" method="post" name="form1">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input name="firstname" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required="required">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input name="lastname" class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required="required">
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputUser">User name</label>
                <input name="username" class="form-control" id="exampleInputUser" type="text" aria-describedby="nameHelp" placeholder="abc123" required="required">
              </div>
              <div class="col-md-6">
                <label for="exampleInputPassword">Password</label>
                <input name="password" class="form-control" id="exampleInputPassword" type="password" aria-describedby="nameHelp" placeholder="Enter password" required="required">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="abc@gmail.com" required="required">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputContact">Contact</label>
                <input name="contact" class="form-control" id="exampleInputContact" type="text" placeholder="Enter contact" required="required">
              </div>
              <div class="col-md-6">
                <label for="exampleInputSemester">Semester</label>
                <input name="sem" class="form-control" id="exampleInputSemester" type="text" placeholder="Enter semester" required="required">
              </div>
            </div>
          </div>
		  <div class="form-group">
            <label for="exampleInputEnrollment">Enrollment Number</label>
            <input name="enrollmentno" class="form-control" id="exampleInputEnrollement" type="text"  placeholder="Enter enrollment number" required="required">
          </div>
          
<input class="btn btn-primary btn-block" name="submit1" type="submit"  value="Register" />


        </form>
        <br/>
        <?php 
	if(isset($_POST['submit1']))
	{
	$sql_ins=mysql_query("insert into student_registration values('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[sem]','$_POST[enrollmentno]','no')");
	 
     	if($sql_ins==true)
		{
         ?>
         <div class="alert alert-success col-lg-12 col-lg-push-0">
Registration Successfully,You will get email when your account is approved.
</div>
         <?php
		}
		
	
        
	}
?>

        <!--<div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>-->
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
