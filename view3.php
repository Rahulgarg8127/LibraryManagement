<html>
<head><title></title>
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
margin-top:0px;
}
.ab{
 table-layout:fixed;
  width: 75%;
  text-align:center;  
  }
 .update{
 font-size:9px;
 width:40px;
 } 
</style>
</head>
<body>


<div class="books">



<table border="2" align="center" class="ab">
<tr><td><strong>B_ID</strong></td><td><strong>BOOK_NAME</strong></td><td ><strong>GENRE</strong></td><td> <strong>PRICE</strong></td><td> <strong>STOCK</strong></td><td><strong>UPDATE</strong></td><td><strong>ISSUE</strong></td></tr>

<?php
  include("issuebookform11db.php");
  if(isset($_GET['B_ID']))
  {
  $B_ID=$_GET['B_ID'];
  
	}
  $select=mysql_query("SELECT * FROM `books`  WHERE books.B_ID =$B_ID");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
 
  $B_ID=$userrow['B_ID'];
  $BOOK_NAME=$userrow['BOOK_NAME'];
  $GENRE=$userrow['GENRE'];
  $PRICE=$userrow['PRICE'];
  $STOCK=$userrow['Stock'];
?>


<tr><td ><span><?php echo $B_ID; ?></span></td>
<td><span><?php echo $BOOK_NAME; ?></span></td>
<td><span><?php echo $GENRE; ?></span></td>
<td ><span><?php echo $PRICE; ?></span></td>
<td ><span><?php echo $STOCK; ?></span></td>
<td ><span ><a href="updatebook.php?B_ID=<?php echo $B_ID; ?>" style="width:140px;"><span class="edit" title="Edit" style="font-size:14px;"> UPDATE </span></a></span></td>
<td ><span><a href="issuebookform11.php?B_ID=<?php echo urlencode($B_ID); ?>&amp;BOOK_NAME=<?php echo urlencode($BOOK_NAME); ?>&amp;STOCK=<?php echo urlencode($STOCK); ?>&amp;GENRE=<?php echo urlencode($GENRE); ?>&amp;PRICE=<?php echo urlencode($PRICE); ?>" style="width:115px;"><span style="font-size:14px"> I </span></a></span></td>
</tr>


<?php } ?>
</table>
</div>
</body>
</html>
