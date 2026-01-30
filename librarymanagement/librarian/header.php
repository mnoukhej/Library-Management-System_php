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
            <span class="nav-link-text"><marquee class="alert-danger"><strong><?php echo $_SESSION["lib_user"];?></strong></marquee></span>
          </a>
        </li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="All Students Information">
          <a class="nav-link" href="display_student_info.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">All student info</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Books">
          <a class="nav-link" href="add_books.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Add Book</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Display Books">
          <a class="nav-link" href="display_books.php">
            <i class="fa fa-fw fa-desktop"></i>
            <span class="nav-link-text">Display Books</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Issue Books">
          <a class="nav-link" href="issue_books.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Issue Books</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Return Books">
          <a class="nav-link" href="return_books.php">
            <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text">Return Books</span>
          </a>
          
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Message to Student">
          <a class="nav-link" href="books_details_with_student.php">
            <i class="fa fa-fw fa-circle"></i>
            <span class="nav-link-text">Book With All Info</span>
          </a>
          
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notice">
          <a class="nav-link" href="news.php">
            <i class="fa fa-calendar"></i>
            <span class="nav-link-text">Notice</span>
          </a>
          
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Message to Student">
          <a class="nav-link" href="send_notification_student.php">
            <i class="fa fa-mail-forward"></i>
            <span class="nav-link-text">Message to Student</span>
          </a>
          
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        
        
        
        <li class="nav-item">
        <a class="btn btn-primary" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
 