


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
<tr><td ><strong>ISSUE DATE</strong></td><td ><strong>U_ID</strong></td><td><strong>NAME</strong></td><td><strong>BOOK_NAME</strong></td><td><strong>RETURNED_DATE</strong></td><td><strong>DAYS</strong></td><td><strong>FINE</strong></td></tr>

<?php

  include("issuebookform11db.php");
  if(isset($_GET['U_ID']))
  {
  $U_ID=$_GET['U_ID'];
  
	}
  $select=mysql_query("SELECT * FROM returnedbooks  WHERE returnedbooks.U_ID=$U_ID ");
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

