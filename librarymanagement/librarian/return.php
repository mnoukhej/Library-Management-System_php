<?php

include("../connection/connection.php");
$id=$_GET["id"];
$a=date("d-M-y");
mysql_query("update issue_books set books_return_date='$a' where id=$id");
$books_name="";
$res=mysql_query("select * from issue_books where id=$id");
while($row=mysql_fetch_assoc($res))
{
	$books_name=$row["books_name"];
	}
	mysql_query("update add_books set available_qty=available_qty+1 where books_name='$books_name'");


?>
<script type="text/javascript">
    window.location="return_books.php";
    </script>