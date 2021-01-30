<?php
 ob_start();
  include("adduserdb.php");
  if(isset($_POST['send'])!="")
  {
  $username=mysql_real_escape_string($_POST['username']);
  $password=mysql_real_escape_string($_POST['password']);
  $class=mysql_real_escape_string($_POST['class']);
  $rollno=mysql_real_escape_string($_POST['rollno']);
  $update=mysql_query("INSERT INTO users(USERNAME,PASSWORD,CLASS,ROLLNO)VALUES
									  ('$username','$password','$class','$rollno')");
   $update1=mysql_query("INSERT INTO login(USERNAME,PASSWORD)VALUES
									  ('$username','$password')");
  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:userview.php');
  }
  
  }
 ob_end_flush();
?>