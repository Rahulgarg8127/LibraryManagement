


<HTML>
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
.main{
margin-top:-700px;
}
 .ab{
 table-layout:fixed;
  width:75%;
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
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php" >SEARCH ISSUED BOOKS</a></li><br/>
<li><a href="viewreturnedbooks.php" style="background-color:#7A991A;">RETURNED BOOKS</a></li><br/>
<li><a href="searchreturnedbooks.php">VIEW RETURNED</a></li><br/>
</ul>
</div>
</div>
<div class="main">
<center><h1><strong>RETURNED BOOKS</strong></h1></center>
<table   border="2" align="center" class="ab">
<tr><td ><strong>ISSUE DATE</strong></td><td ><strong>U_ID</strong></td><td><strong>NAME</strong></td><td><strong>BOOK_NAME</strong></td><td><strong>RETURNED_DATE</strong></td><td><strong>DAYS</strong></td><td><strong>FINE</strong></td></tr>

<?php

  include("issuebookform11db.php");
  $select=mysql_query("SELECT * FROM returnedbooks order by U_ID desc ");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
     $ISSUE_DATE=$userrow['ISSUE_DATE'];
  $U_ID=$userrow['U_ID'];
  $NAME=$userrow['NAME'];
  $BOOK_NAME=$userrow['BOOK_NAME'];
  $RETURNED_DATE=$userrow['RETURNED_DATE'];
  $DAYS=$userrow['DAYS'];
  $FINE=$userrow['FINE'];
  ?>
  
  <tr>
<td><span><?php echo $ISSUE_DATE; ?></span></td>
<td><span><?php echo $U_ID; ?></span></td>
<td ><span><?php echo $NAME; ?></span></td>
<td ><span><?php echo $BOOK_NAME; ?></span></td>
<td ><span><?php echo $RETURNED_DATE; ?></span></td>
<td ><span><?php echo $DAYS; ?></span></td>
<td ><span><?php echo $FINE; ?></span></td>
</tr>


<?php } ?></table>
</div>
</body>
</html>

