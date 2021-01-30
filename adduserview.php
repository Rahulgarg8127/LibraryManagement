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
.users{
margin-top:-700px;
}
.ab{
 table-layout:fixed;
  width: 60%;
  text-align:center;  
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
<li><a href="adduserview.php" style="background-color:#7A991A;">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
<li><a href="viewreturnedbooks.php">RETURNED BOOKS</a></li><br/>
<li><a href="searchreturnedbooks.php">VIEW RETURNED</a></li><br/>
</ul>
</div>
</div>

<div class="users">
<center><h1><strong>USERS</strong></h1></center>
<table   border="2" align="center" class="ab">
<tr><td><strong>U_ID</strong></td><td><strong>USERNAME</strong></td><td><strong>PASSWORD</strong></td><td><strong>CLASS</strong></td><td><strong>ROLLNO.</strong></td><td><strong>LIMIT</strong></td><td><strong>BOOKS ISSUED</strong></td></tr>

<?php
 include('addbookdb.php');
  $select=mysql_query("SELECT * FROM `users` order by U_ID desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $U_ID=$userrow['U_ID'];
  $USERNAME=$userrow['USERNAME'];
  $PASSWORD=$userrow['PASSWORD'];
  $CLASS=$userrow['CLASS'];
  $ROLLNO=$userrow['ROLLNO'];
  $COUNT=$userrow['COUNT'];
?>


<tr><td ><span><?php echo $U_ID; ?></span></td>
<td ><span><?php echo $USERNAME; ?></span></td>
<td ><span><?php echo $PASSWORD; ?></span></td>
<td ><span><?php echo $CLASS; ?></span></td>
<td ><span><?php echo $ROLLNO; ?> </span></td>
<td ><span><?php echo $COUNT; ?> </span></td>
<td><a href="viewuser.php?U_ID=<?php echo $U_ID; ?>" style="width:105px;"><span class="edit" title="Edit" style="font-size:10px;"> E </span></a></td>

</tr>

<?php } ?></table>
</div>
</body>
</html>