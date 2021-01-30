<html>
<head>
<style>

.issuebooks{

margin-left:100px;
}
.ab{
 table-layout:fixed;
  width: 65%;
  text-align:center;  
  }
  .ab{
 table-layout:fixed;
  width:84%;
  text-align:center;  
  }
 .update{
 font-size:9px;
 width:40px;
 }
</style>
</head>
<body>
<div class="issuebooks">
<center><h1><strong>ISSUED BOOKS</strong></h1></center>

<table   border="2" align="center" class="ab">
<tr><td ><strong>ISSUE DATE</strong></td><td ><strong>B_ID</strong></td><td><strong>BOOK_NAME</strong></td><td><strong>U_ID</strong></td><td><strong>NAME</strong></td><td><strong>CLASS</strong></td><td><strong>ROLLNO.</strong></td><td ><strong>RETURN DATE</strong></td></tr>

<?php
 include('issuebookformdb.php');
  if(isset($_GET['email']))
  {
  $email=$_GET['email'];
  }
  $select=mysql_query("SELECT * FROM `issuebooks1` , `users` WHERE users.USERNAME='$email' AND issuebooks1.U_ID=users.U_ID ");
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
 
   $RETURN_DATE=$userrow['RETURNED_DATE'];
?>

<tr>
<td><span><?php echo $ISSUE_DATE; ?></span></td>
<td><span><?php echo $B_ID; ?></span></td>
<td ><span><?php echo $BOOK_NAME; ?></span></td>
<td ><span><?php echo $U_ID; ?></span></td>
<td ><span><?php echo $NAME; ?></span></td>
<td ><span><?php echo $CLASS; ?></span></td>
<td ><span><?php echo $ROLLNO; ?></span></td>
<td ><span><?php echo $RETURN_DATE; ?></span></td>

</tr>


<?php } ?></table>
</div>
</body>
</html>