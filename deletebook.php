<?php
  ob_start();
  include('addbookdb.php');
  if(isset($_GET['B_ID'])!="")
  {
  $delete=$_GET['B_ID'];
  $delete=mysql_query("DELETE FROM books WHERE B_ID='$delete'");
  if($delete)
  {
	  header("Location:addbookview.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>