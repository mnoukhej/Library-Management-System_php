<!DOCTYPE html>
<html lang="en">
<head>

<?php include "pageinfo.php"; ?>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.bg, .box2{behavior:url("js/PIE.htc");}</style>
<![endif]-->
<style type="text/css">
<!--
.style1 {font-size: 36px}
.style2 {color: #000033}

-->
</style>
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <?php
    include "include/header.php" ;
	?>
    <!-- / header -->
  </div>
</div>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
        <form method="post" action="" class="col-lg-6">
        	<h3>Contact Form</h3>
        	<table class="table table-bordered">
            	<tr>
                 <td><input type="text" name="cname" class="form-control" placeholder="Enter your name" required="required"/></td>
                </tr>
                <tr>
                 <td><input type="text" name="city" class="form-control" placeholder="Enter your city" required="required"/></td>
                </tr>
                <tr>
                 <td><input type="text" name="cphone" class="form-control" placeholder="Enter your Phone" required="required"/></td>
                </tr>
                <tr>
                 <td><input type="text" name="cemail" class="form-control" placeholder="youremail@gmail.com" required="required"/></td>
                </tr>
                <tr>
                 <td><textarea name="message" class="form-control" placeholder=" Message" required="required"></textarea></td>
                </tr>
                <tr>
                 <td>
                <input class="btn btn-primary btn-block" name="submit1" type="submit"  value="Send" />
                </td>
                </tr>
            </table>
        </form>
       <?php 
	if(isset($_POST['submit1']))
	{
	$sql_ins=mysql_query("insert into contact values('','$_POST[cname]','$_POST[city]','$_POST[cphone]','$_POST[cemail]','$_POST[message]')");
	 
     	if($sql_ins==true)
		{
         ?>
         <div class="alert alert-success col-lg-8 col-lg-push-0">
Message send Successfully,You will contact you as soon as possible.
</div>
         <?php
		}
		
	
        
	}
?>
        </div>
      </div>
    </section>
    <!-- content -->
  <?php  include "include/footer.php";
  ?>
  
</html>