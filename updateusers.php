<?php 
ob_start();
include('addbookdb.php');
if(isset($_GET['U_ID']))
{
  $id=$_GET['U_ID'];
  if(isset($_POST['update']))
  {
  $eusername=$_POST['eusername'];
  $epassword=$_POST['epassword'];
  $eclass=$_POST['eclass'];
  $erollno=$_POST['erollno'];
  $updated=mysql_query("UPDATE users SET 
		USERNAME='$eusername', PASSWORD='$epassword', CLASS='$eclass', ROLLNO='$erollno' WHERE U_ID='$id'")or die();
  		
  if($updated)
  {
  $msg="Successfully Updated!!";
   echo "<script type='text/javascript'>alert('$msg');</script>";
  }
}
}
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" >
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
.display{

margin-left:450px;
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
  if(isset($_GET['U_ID']))
  {
  $id=$_GET['U_ID'];
  $getselect=mysql_query("SELECT * FROM users WHERE U_ID='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $USERNAME=$profile['USERNAME'];
  $PASSWORD=$profile['PASSWORD'];
  $CLASS=$profile['CLASS'];
  $ROLLNO=$profile['ROLLNO'];
?>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> USER NAME : </label>
      <input type="text" name="eusername" required placeholder="Enter your name" 
      value="<?php echo $USERNAME; ?>" id="inputid" />
    </p>
    <p>
      <label  for="password"  id="preinput"> PASSWORD : </label>
      <input type="text" name="epassword" required placeholder="Enter your Email" 
      value="<?php echo $PASSWORD; ?>" id="inputid" />
    </p>
    <p>
      <label for="mobile" id="preinput"> CLASS: </label>
      <input type="text" name="eclass" required placeholder="Enter your mobile number" 
      value="<?php echo $CLASS; ?>" id="inputid" />
    </p>
	<p>
      <label for="mobile" id="preinput"> ROLL NO,: </label>
      <input type="text" name="erollno" required placeholder="Enter your mobile number" 
      value="<?php echo $ROLLNO; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Update" id="inputid" />
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>
