<HTML>
<head>
<style>
 .ab{
 table-layout:fixed;
  width:70%;
  text-align:center;  
  }
</style>
</head>
<body>
<table   border="2" align="center" class="ab">
<tr><td ><strong>B_ID</strong></td><td><strong>BOOK_NAME</strong></td><td ><strong>GENRE</strong></td><td ><strong> PRICE</strong></td><td><strong>STOCK</strong></td><td><strong>ISSUE</strong></td></tr>
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