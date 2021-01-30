<?php 
ob_start();
include('issuebookformdb.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $UB_ID=$_POST['UB_ID'];
  $UBOOK_NAME=$_POST['UBOOK_NAME'];
  $UU_ID=$_POST['UU_ID'];
  $UNAME=$_POST['UNAME'];
  $UDATE=$_POST['UDATE'];
  $URETURN_DATE=$_POST['URETURN_DATE'];
  $URETURN_ON=$_POST['URETURN_ON'];
  
  $updated=mysql_query("UPDATE issuebooks SET 
		B_ID='$UB_ID', BOOK_NAME='$UBOOK_NAME', U_ID='$UU_ID',NAME='$UNAME',ISSUE_DATE='$UDATE',RETURN_DATE='$URETURN_DATE',RETURN_ON='$URETURN_ON' WHERE id='$id'")or die();
	echo $URETURN_ON;	
  if($updated)
  {
  
  $msg="Successfully Updated!!";
  header('Location:issuebookview.php');
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
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM issuebooks WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $B_ID=$profile['B_ID'];
    $BOOK_NAME=$profile['BOOK_NAME'];
    $U_ID=$profile['U_ID'];
	$NAME=$profile['NAME'];
	$DATE=$profile['ISSUE_DATE'];
	$RETURN_DATE=$profile['RETURN_DATE'];
	$RETURN_ON=$profile['RETURN_ON'];
?>
<div class="display">
<form action="" method="post" name="insertform">
<p>
  <label for="name" id="preinput"> B_ID : </label>
  <input type="text" name="UB_ID" value="<?php echo $B_ID; ?>" required placeholder="B_ID" id="inputid"/>
</p>
<p>
  <label  for="email" id="preinput"> BOOK_NAME : </label>
  <input type="email" name="UBOOK_NAME" value="<?php echo $BOOK_NAME; ?>" required placeholder="BOOK_NAME" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> U_ID: </label>
  <input type="text" name=" UU_ID" value="<?php echo $U_ID  ; ?>" required placeholder="U_ID" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> NAME: </label>
  <input type="text" name="UNAME" value="<?php echo $NAME; ?>" required placeholder="NAME" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput">ISSUED DATE: </label>
  <input type="date" name="UDATE" value="<?php echo $DATE; ?>" required placeholder="NAME" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput">RETURNED DATE: </label>
  <input type="date" name="URETURN_DATE" value="<?php echo $RETURN_DATE; ?>" required placeholder="NAME" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput">RETURNED ON: </label>
  <input type="date" name="URETURN_ON" value="<?php echo $RETURN_ON; ?>" required placeholder="NAME" id="inputid" />
</p>
<p>
  <input type="submit" name="update" value="Submit" id="inputid"  />
</p>
</form>
</div>
<?php } } ?>
</body>
</html>