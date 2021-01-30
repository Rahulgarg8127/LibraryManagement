<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet">
<style>
.menu{
background-color:#0066FF;
width:190px;
height:755px;
margin-left:-14px;
margin-top:-28px;
}
.menu1{

margin-top:30px;
}
a:link,a:visited
{
display:block;
font-size:22px;

font-weight:bold;
color:#FFFFFF;
background-color:#0066FF;
width:170px;
text-align:center;
padding:10px;
text-decoration:none;
text-transform:uppercase;
}
ul
{
list-style-type:none;
margin:0;
padding:0;
}
a:hover,a:active
{
background-color:#7A991A;
}
.DISPLAY{
margin-left:300PX;
margin-top:-600PX;
}
</style>
</head>

<body>
<div style="font-size:30px;"<strong><center>RETURNED STATUS</center></strong></div>
<div class="menu">
  <div class="menu1">
  <ul>
  <li><a href="aa.php">HOME</a></li><br/>
<li><a href="addbook.php">ADD BOOKS</a></li><br/>
<li><a href="addbookview.php">VIEW BOOKS</a></li><br/>
<li><a href="adduser.php">ADD USER</a></li><br/>
<li><a href="userview.php">UPDATE USERS</a></li><br/>
<li><a href="searchuser.php">SEARCH USER</a></li><br/>
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
</ul>
</div>
</div>
<?php
  ob_start();
  include("issuebookform11db.php");
  if(isset($_GET['TIME'])!="")
  {
  $FINE=$_GET['FINE'];
  $delete=$_GET['TIME'];
  $B_ID=$_GET['B_ID'];
  $U_ID=$_GET['U_ID'];
  $DAYS=$_GET['DAYS'];
  
  $ISSUE_DATE=$_GET['ISSUEDATE'];
  $RETURN_DATE=$_GET['RETURNDATE'];
   $getselect=mysql_query("SELECT * FROM `books` , `users` WHERE books.B_ID='$B_ID' AND users.U_ID='$U_ID' ");
	 while($profile=mysql_fetch_array($getselect))
  {
     $NAME=$profile['USERNAME'];
    $CLASS=$profile['CLASS'];
    $BOOK_NAME=$profile['BOOK_NAME'];
    $STOCK=$profile['Stock'];
	$STOCK=$STOCK+1;
	$COUNT=$profile['COUNT'];
	$COUNT=$COUNT+1;
  $delete=mysql_query("DELETE FROM issuebooks1 WHERE TIME='$delete'");
  if($delete)
  {
      $updated1=mysql_query("UPDATE books SET 
		Stock='$STOCK' WHERE B_ID='$B_ID'")or die();
		if($updated1)
		{
		$updated2=mysql_query("UPDATE users SET 
		COUNT='$COUNT' WHERE U_ID='$U_ID'")or die();
		if($updated2)
		{
		 $update3=mysql_query("INSERT INTO returnedbooks(ISSUE_DATE,U_ID,NAME,BOOK_NAME,RETURNED_DATE,DAYS,FINE)VALUES
									  ('$ISSUE_DATE','$U_ID','$NAME','$BOOK_NAME','$RETURN_DATE','$DAYS','$FINE')");
           if($update3)
		   {
	  $msg="Successfully returned!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  }
	  }
	  }
  }
 
  }
  }
  ob_end_flush();
  
 
?>

<div class="DISPLAY">

<table   border="2" align="center" class="ab" width="900px">
<tr><td align="center" ><strong>U_ID</strong></td><td align="center" ><strong>NAME</strong></td><td align="center"><strong>CLASS</strong></td><td align="center"><strong>BOOK_NAME</strong></td><td align="center"><strong>STATUS</strong></td><td align="center"><strong>DAYS</strong></td><td align="center"><strong>FINE</strong></td></tr>
<tr>
<td align="center"><?php echo $U_ID; ?></td>
<td align="center"><?php echo $NAME; ?></td>
<td align="center"><?php echo $CLASS; ?></td>
<td align="center"><?php echo $BOOK_NAME; ?></td>

<td align="center"><?php echo "RETURNED"; ?></td>
<td align="center"><?php echo $DAYS; ?></td>
<td align="center"><?php echo  $FINE; ?></td></tr>
</table>
</div>
</body>
</html>