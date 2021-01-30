<?php
 ob_start();
  include("addbookdb.php");
  if(isset($_POST['send'])!="")
  {
  $BOOK_NAME=mysql_real_escape_string($_POST['bookname']);
  $GENRE=mysql_real_escape_string($_POST['genre']);
  $PRICE=mysql_real_escape_string($_POST['price']);
  $STOCK=mysql_real_escape_string($_POST['STOCK']);
 
  $update=mysql_query("INSERT INTO `books`(BOOK_NAME,GENRE,PRICE,Stock)VALUES
									  ('$BOOK_NAME','$GENRE','$PRICE','$STOCK')");
  
  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:addbookview.php');
  }
  
  }
 ob_end_flush();
?>