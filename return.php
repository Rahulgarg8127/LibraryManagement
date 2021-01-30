
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
margin-top:-600px;
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
<li><a href="userview.php">UPDATE USERS</a></li><br/>
<li><a href="searchuser.php">SEARCH USER</a></li><br/>
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
</ul>
</div>
</div>
<div class="issuebooks">
<center><h1><strong>ISSUED BOOKS</strong></h1></center>

<table   border="2" align="center" class="ab">
<tr><td >ISSUE DATE</td><td >B_ID</td><td>BOOK_NAME</td><td >U_ID</td><td >NAME</td><td>CLASS</td><td >ROLLNO.</td><td >Days</td><td >Fine</td></tr>

<?php
 include('issuebookformdb.php');
 
  if(isset($_GET['RETURN_DATE']))
  {
  $RETURN_DATE=$_GET['RETURN_DATE'];
  $DATE=$_GET['DATE'];
 
  $start_date = strtotime("$DATE"); 
$end_date = strtotime("$RETURN_DATE");
  }
  if ($start_date > $end_date)
   {
   	$abcd=0;
  
   
   }
   else
   {
   $abcd= ($end_date - $start_date)/60/60/24;
   }
   if(isset($_GET['U_ID']))
  {
  $U_ID=$_GET['U_ID'];
  }
  if(isset($_GET['TIME']))
  {
  $TIME=$_GET['TIME'];
  }
$select=mysql_query("SELECT *
FROM `issuebooks1` , `users`
WHERE issuebooks1.U_ID =$U_ID AND users.U_ID=$U_ID AND issuebooks1.TIME=$TIME");
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
   $FINE=($abcd*20);
?>

<tr>
<td><span><?php echo $ISSUE_DATE; ?></span></td>
<td><span><?php echo $B_ID; ?></span></td>
<td ><span><?php echo $BOOK_NAME; ?></span></td>
<td ><span><?php echo $U_ID; ?></span></td>
<td ><span><?php echo $NAME; ?></span></td>
<td ><span><?php echo $CLASS; ?></span></td>
<td ><span><?php echo $ROLLNO; ?></span></td>
<td ><span><?php echo $abcd; ?></span></td>
<td ><span><?php echo $FINE; ?><a href="delete1.php?B_ID=<?php echo urlencode($B_ID); ?>&amp;TIME=<?php echo urlencode($TIME); ?>&amp;FINE=<?php echo urlencode ($FINE); ?>&amp;DAYS=<?php echo urlencode($abcd); ?>&amp;ISSUEDATE=<?php echo urlencode($ISSUE_DATE); ?>DATE=<?php echo urlencode($DATE); ?>&amp;RETURNDATE=<?php echo urlencode($RETURN_DATE); ?>&amp;U_ID=<?php echo urlencode($U_ID); ?>" style="width:90px;"><span style="font-size:12px;" >I </span></a></span></td>


</tr>


<?php } ?></table>
</div>
</body>
</html>