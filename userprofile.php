<html>
<head>
<style>
* {
	margin:0;
	padding:0;
	margin:0 auto;
	font-family:Tahoma, Geneva, sans-serif;
	color:#036;
}
p {
	margin-top:10px;
}
span {
	color:#033;
}
#preinput {
	width:250px;
	float:left;
}
.display {
	width:30%;
	border:1px green solid;
	padding:1%;
	margin-bottom:10px;
	margin-top:10px;
}
.delete {
	float:right;
	color:#F00;
	font-weight:bold;
}
.edit {
	float:right;
	color:#039;
	font-weight:bold;
}
#inputid {
	width:280px;
	padding:10px;
}
#inputid1 {
	width:305px;
	padding:10px;
}
</style>
</head>
<body>
<?php
 include('issuebookformdb.php');
  if(isset($_GET['email']))
  {
  $email=$_GET['email'];
  }
  $select=mysql_query("SELECT * FROM `users` WHERE users.USERNAME='$email'");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $U_ID=$userrow['U_ID'];
  $USERNAME=$userrow['USERNAME'];
 $CLASS=$userrow['CLASS'];
  $ROLLNO=$userrow['ROLLNO'];
  $PASSWORD=$userrow['PASSWORD'];
  $COUNT=$userrow['COUNT'];
?>

<div class="display">
  <p> U_ID : <span><?php echo $U_ID; ?></span>
  </p>
  <br />
  <p> NAME : <span><?php echo $USERNAME; ?></span>
    
  </p>
  <br />
  <p> CLASS : <span><?php echo $CLASS; ?></span>
  </p>
  <br />
  <p> ROLL NO. : <span><?php echo $ROLLNO; ?></span>
  </p>
  <br />
  <p> PASSWORD : <span><?php echo $PASSWORD; ?></span>
  </p>
  <BR/>
  <p> BOOKS LIMIT: <span><?php echo $COUNT; ?></span>
  </p>
</div>
<?php } ?>
</body></html>