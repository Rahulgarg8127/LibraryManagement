<html>
<head>
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
</style>
</head>
<body>
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
  if(isset($_POST['send'])!="")
  {
  $B_ID=mysql_real_escape_string($_POST['B_ID']);
  $BOOK_NAME=mysql_real_escape_string($_POST['BOOK_NAME']);
  $U_ID=mysql_real_escape_string($_POST['U_ID']);
  $ISSUE_DATE=mysql_real_escape_string($_POST['ISSUE_DATE']);
  $TIME=mysql_real_escape_string($_POST['TIME']);
   $STOCK=mysql_real_escape_string($_POST['STOCK']);
   $RETURN_DATE=(date('Y-m-d', strtotime($ISSUE_DATE. ' + 20 days')));
   $STOCK=($STOCK-1);
   $result=mysql_query("SELECT U_ID FROM users WHERE U_ID='$U_ID'");
   $row = mysql_fetch_array($result);
   if($row["U_ID"]==$U_ID)
	{
    $getselect=mysql_query("SELECT * FROM users WHERE U_ID='$U_ID'");
	
	
	 while($profile=mysql_fetch_array($getselect))
  {
    $COUNT=$profile['COUNT'];
	
	if($COUNT>0)
	{
  $update=mysql_query("INSERT INTO issuebooks1(B_ID,BOOK_NAME,U_ID,ISSUE_DATE,RETURNED_DATE,TIME)VALUES
									  ('$B_ID','$BOOK_NAME','$U_ID','$ISSUE_DATE','$RETURN_DATE','$TIME')");
	$COUNT=$COUNT-1;
   if($update)
  {
      $updated1=mysql_query("UPDATE books SET 
		Stock='$STOCK' WHERE B_ID='$B_ID'")or die();
		if($updated1)
		{
		$updated2=mysql_query("UPDATE users SET COUNT='$COUNT' WHERE U_ID='$U_ID'")or die();
           if($updated2)
		   {	 
		    $msg="Successfully Updated!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:addbookview.php');
	  }
		
		}
	
  }
  }
  else
  {
   $msg="Already issue two books!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	 
	  }
  }
  }
  
  else
  {
   $msg="User not exsist!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
   
  }
  }
end_flush();
?> 							  
									  
  </body>
</html>