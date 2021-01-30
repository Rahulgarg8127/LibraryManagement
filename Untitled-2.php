
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
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview.php">VIEW ISSUED BOOKS</a></li><br/>
</ul>
</div>
</div>
<div class="issuebooks">
<center><h1><strong>ISSUED BOOKS</strong></h1></center>

<table   border="2" align="center" class="ab">
<tr><td >B_ID</td><td>BOOK_NAME</td><td >NAME</td><td > DATE</td><td> RETURN_DATE</td><td >RETURNED ON</td><td >FINE</td></tr>

<?php
 include('issuebookformdb.php');
  $select=mysql_query("SELECT * FROM `issuebooks` order by B_ID desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $B_ID=$userrow['B_ID'];
  $BOOK_NAME=$userrow['BOOK_NAME'];
  $U_ID=$userrow['U_ID'];
  $NAME=$userrow['NAME'];
   $DATE=$userrow['ISSUE_DATE'];
    $RETURN_DATE=$userrow['RETURN_DATE'];
	$RETURN_ON=$userrow['RETURN_ON'];
	$start_date = strtotime("$RETURN_DATE"); 
$end_date = strtotime("$RETURN_ON");
$abcd= ($end_date - $start_date)/60/60/24;
?>


<tr><td><span><?php echo $B_ID; ?></span></td>
<td ><span><?php echo $BOOK_NAME; ?></span></td>
<td ><span><?php echo $NAME; ?></span></td>
<td ><span><?php echo $DATE; ?></span></td>
<td ><span><?php echo $RETURN_DATE; ?></span></td>
<td ><span><?php echo $RETURN_ON; ?></span></td>
<td ><span><?php echo (($abcd)*2); ?> </span></td>
<td><span><a href="Update.php?id=<?php echo $id; ?>"> RETURN </a></span></td>
</tr>


<?php } ?></table>
</div>
</body>
</html>