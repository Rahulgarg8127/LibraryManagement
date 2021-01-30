<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php

include('issuebookformdb.php');
  if(isset($_GET['RETURN_DATE']))
  {
  $RETURN_DATE=$_GET['RETURN_DATE'];
  }
  $DATE=date("Y/m/d");
  if($DATE > $RETURN_DATE)
  {
   header('Location:issuebook.php');
  }
  else
  {
    $RETURNED_DATE=(date('Y-m-d', strtotime($RETURN_DATE. ' + 20 days')));
	
	 $updated=mysql_query("UPDATE issuebooks1 SET 
		RETURNED_DATE='$RETURNED_DATE', PASSWORD='$epassword', CLASS='$eclass', ROLLNO='$erollno' WHERE U_ID='$id'")or die();
	
  }
?>



</body>
</html>
