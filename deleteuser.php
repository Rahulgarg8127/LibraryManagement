<?php
  ob_start();
  include('addbookdb.php');
  if(isset($_GET['U_ID'])!="")
  {
  $delete=$_GET['U_ID'];
  $delete=mysql_query("DELETE FROM users WHERE U_ID='$delete'");
  if($delete)
  {
	  header("Location:userview.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>