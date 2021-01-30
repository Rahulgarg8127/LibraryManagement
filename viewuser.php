
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
.issuebooks{
margin-top:-700px;
}
.ab{
 table-layout:fixed;
  width: 65%;
  text-align:center;  
  }
  .ab{
 table-layout:fixed;
  width:70%;
  text-align:center;  
  }
 .update{
 font-size:9px;
 width:40px;
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
<li><a href="userview.php"  >UPDATE USERS</a></li><br/>
<li><a href="searchuser.php">SEARCH USER</a></li><br/>
<li><a href="adduserview.php" style="background-color:#7A991A;">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
</ul>
</div>
</div>
<div class="issuebooks">
<center><h1><strong>ISSUED BOOKS</strong></h1></center>

<table   border="2" align="center" class="ab">
<tr><td >ISSUE DATE</td><td >B_ID</td><td>BOOK_NAME</td><td >U_ID</td></tr>

<?php
 include('issuebookformdb.php');
  if(isset($_GET['U_ID']))
  {
  $U_ID=$_GET['U_ID'];
  }
	
  $select=mysql_query("SELECT *
FROM `issuebooks1` , `users`
WHERE issuebooks1.U_ID =$U_ID AND users.U_ID=$U_ID");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  
  $B_ID=$userrow['B_ID'];
  $BOOK_NAME=$userrow['BOOK_NAME'];
  $U_ID=$userrow['U_ID'];
  $NAME=$userrow['USERNAME'];
  $CLASS=$userrow['CLASS'];
  $ROLLNO=$userrow['ROLLNO'];
  $ISSUE_DATE=$userrow['ISSUE_DATE'];
   $RETURN_DATE=(date('Y-m-d', strtotime($ISSUE_DATE. ' + 20 days')));
?>

<tr>
<td><span><?php echo $ISSUE_DATE; ?></span></td>
<td><span><?php echo $B_ID; ?></span></td>
<td ><span><?php echo $BOOK_NAME; ?></span></td>
<td ><span><?php echo $U_ID; ?></span></td>


</tr>


<?php } ?></table>
</div>
</body>
</html>