<?php

include("../connection/connection.php");
include("header.php");
mysql_query("update messages set read1='y' where username='$_SESSION[username]'");
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <h4>Message from Librarian</h4>
        </li>
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
     	<table class='table table-bordered'>
        		<tr>
                  <th>Full name</th>
                  <th>Title</th>
                  <th>Message</th>
          </tr>
          		<?php
						$res=mysql_query("select * from messages where username=$_SESSION[username]");
							while($row=mysql_fetch_array($res))
								{
									
							
									echo "<tr>";
									echo "<td>";echo $row["susername"]; echo"</td>";
									echo "<td>";echo $row["title"];echo "</td>";
									echo "<td>";echo $row["msg"];echo "</td>";
									echo "</tr>";
									}
								
						
				?>
        </table>
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
