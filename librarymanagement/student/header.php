 <?php
 session_start();
include("../connection/connection.php");
$tot=0;
$res=mysql_query("select * from messages where username='$_SESSION[username]' && read1='n'");
$tot=mysql_num_rows($res);
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
 <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
   <a class="nav-link" href="index.html">
  <i class="fa fa-fw fa-book"></i></a>
    <a class="navbar-brand" href="index.html">Library Management System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link">
            
            <span class="nav-link-text">Welcome, </span>
            <span class="nav-link-text"><marquee class="alert-danger"><strong><?php echo $_SESSION["username"];?></strong></marquee></span>
			<img src="../photo.JPG"  height="50" width="50"/>
          </a>
        </li>
        	
          <a class="nav-link" href="my_issued_books.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">My Issued Books</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="search.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Search Books</span>
          </a>
        </li>
        
        
       
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li  role="presentation" class="dropdown">
          <a href="message_from_librarian.php">
            <i class="fa fa-bell-o"></i>Message
           <span class="badge badge-pill badge-primary"" onClick="window.location='message_from_librarian.php'"><?php echo $tot;?></span>
            
          </a>
		  </li>
        
        <li class="nav-item">
        <a class="btn btn-primary" href="login.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
 </body>