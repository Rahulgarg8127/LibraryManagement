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
<center><h1><strong>USERS</strong></h1></center>
<table   border="2" align="center" class="ab">
<tr><td >B_ID</td><td>BOOK_NAME</td><td >U_ID</td><td >NAME</td><td >BOOK ISSUED</td><td >UPDATE</td></tr>
<?php

  include("issuebookform11db.php");
  if(isset($_GET['U_ID']))
  {
  $U_ID=$_GET['U_ID'];
  
	}
  $select=mysql_query("SELECT * FROM `users`  WHERE users.U_ID =$U_ID");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
    $U_ID=$userrow['U_ID'];
  $USERNAME=$userrow['USERNAME'];
  $PASSWORD=$userrow['PASSWORD'];
  $CLASS=$userrow['CLASS'];
  $ROLLNO=$userrow['ROLLNO'];
  ?>
  
  <tr>
  <td><span><?php echo $U_ID; ?></span></td>
<td ><span><?php echo $USERNAME; ?></span></td>
<td ><span><?php echo $CLASS; ?></span></td>
<td ><span><?php echo $ROLLNO; ?></span></td>
<td><a href="viewuser2.php?U_ID=<?php echo $U_ID; ?>" style="width:125px;"><span class="edit" title="Edit" style="font-size:10px;"> VIEW </span></a></td>
<td><a href="updateusers.php?U_ID=<?php echo $U_ID; ?>" style="width:125px;"><span class="edit" title="Edit" style="font-size:10px;"> &clubs; </span></a></td>
</tr>
<?php } ?></table>
</body>
</HTML>
