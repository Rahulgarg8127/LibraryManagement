<HTML>
<head>
<style>
 .ab{
 table-layout:fixed;
  width:90%;
  text-align:center;  
  }
</style>
</head>
<body>

<table   border="2" align="center" class="ab">
<tr><td ><strong>ISSUE DATE</strong></td><td ><strong>B_ID</strong></td><td><strong>BOOK_NAME</strong></td><td><strong>U_ID</strong></td><td><strong>NAME</strong></td><td><strong>CLASS</strong></td><td><strong>ROLLNO.</strong></td><td ><strong>RETURN</strong></td></tr>

<?php

  include("issuebookform11db.php");
  if(isset($_GET['B_ID']))
  {
  $B_ID=$_GET['B_ID'];
  
	}
  $select=mysql_query("SELECT * FROM `issuebooks1`,`users`  WHERE issuebooks1.B_ID=$B_ID AND issuebooks1.U_ID=users.U_ID ");
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
  $TIME=$userrow['TIME'];
   $RETURN_DATE=(date('Y-m-d', strtotime($ISSUE_DATE. ' + 20 days')));
  ?>
  
  <tr>
<td><span><?php echo $ISSUE_DATE; ?></span></td>
<td><span><?php echo $B_ID; ?></span></td>
<td ><span><?php echo $BOOK_NAME; ?></span></td>
<td ><span><?php echo $U_ID; ?></span></td>
<td ><span><?php echo $NAME; ?></span></td>
<td ><span><?php echo $CLASS; ?></span></td>
<td ><span><?php echo $ROLLNO; ?></span></td>
<td ><span><a href="return.php?RETURN_DATE=<?php echo urlencode($RETURN_DATE); ?>&amp;DATE=<?php echo date("Y/m/d"); ?>&amp;U_ID=<?php echo $U_ID; ?>&amp;TIME=<?php echo $TIME; ?>" style="width:100px;"><span style="font-size:14px;"> RETURN </span></a></span></td>

</tr>


<?php } ?></table>
</div>
</body>
</html>
