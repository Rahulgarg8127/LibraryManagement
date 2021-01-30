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
.books{
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
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="issuebook.php" style="background-color:#7A991A;">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
<li><a href="viewreturnedbooks.php">RETURNED BOOKS</a></li><br/>
<li><a href="searchreturnedbooks.php">VIEW RETURNED</a></li><br/>
</ul>
</div>
</div>
<div class="books">
<center><h1><strong>BOOKS</strong></h1></center>

<table   border="2" align="center" class="ab">
<tr><td ><strong>B_ID</strong></td><td><strong>BOOK_NAME</strong></td><td ><strong>GENRE</strong></td><td ><strong> PRICE</strong></td><td><strong>STOCK</strong></td><td><strong>ISSUE</strong></td></tr>

<?php
 include('addbookdb.php');
  $select=mysql_query("SELECT * FROM `books` order by B_ID desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  
  $B_ID=$userrow['B_ID'];
  $BOOK_NAME=$userrow['BOOK_NAME'];
  $GENRE=$userrow['GENRE'];
  $PRICE=$userrow['PRICE'];
  $STOCK=$userrow['Stock'];
?>


<tr><td><span><?php echo $B_ID; ?></span></td>
<td ><span><?php echo $BOOK_NAME; ?></span></td>
<td ><span><?php echo $GENRE; ?></span></td>
<td ><span><?php echo $PRICE; ?></span></td>
<td ><span><?php echo $STOCK; ?></span></td>
<td ><span><a href="issuebookform11.php?B_ID=<?php echo urlencode($B_ID); ?>&amp;BOOK_NAME=<?php echo urlencode($BOOK_NAME); ?>&amp;STOCK=<?php echo urlencode($STOCK); ?>&amp;GENRE=<?php echo urlencode($GENRE); ?>&amp;PRICE=<?php echo urlencode($PRICE); ?>" style="width:126px;"><span style="font-size:14px"> I </span></a></span></td>
</tr>


<?php } ?></TABLE>
</div>
</body>
</html>