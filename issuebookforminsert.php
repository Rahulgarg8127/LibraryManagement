<?php
 ob_start();
  include("issuebookformdb.php");
  if(isset($_POST['send'])!="")
  {
  $B_ID=mysql_real_escape_string($_POST['B_ID']);
  $BOOK_NAME=mysql_real_escape_string($_POST['BOOK_NAME']);
  $U_ID=mysql_real_escape_string($_POST['U_ID']);
  $NAME=mysql_real_escape_string($_POST['NAME']);
  $ISSUE_DATE=mysql_real_escape_string($_POST['ISSUE_DATE']);
  $RETURN_DATE=mysql_real_escape_string($_POST['RETURN_DATE']);
  $RETURN_ON=mysql_real_escape_string($_POST['RETURN_ON']);
 
  $update=mysql_query("INSERT INTO issuebooks(B_ID,BOOK_NAME,U_ID,NAME,ISSUE_DATE,RETURN_DATE,RETURN_ON)VALUES
									  ('$B_ID','$BOOK_NAME','$U_ID','$NAME','$ISSUE_DATE','$RETURN_DATE','$RETURN_ON')");
   if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:issuebook.php');
  }
  
  
  }
 ob_end_flush();
?>