<?php

include("../connection/connection.php");
$id=$_GET["id"];
mysql_query("update student_registration set status='yes' where id=$id");

?>
<script type="text/javascript">
    window.location="display_student_info.php";
    </script>