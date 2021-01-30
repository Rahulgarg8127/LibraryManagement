<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
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
  if(isset($_GET['B_ID']))
  {
  $B_ID=$_GET['B_ID'];
  $B_ID1=$_GET['BOOK_NAME'];
  
	}
?>
<div class="display">
<form action="issuebookforminsert.php" method="post" name="insertform">
<p>
  <label for="name" id="preinput"> B_ID : </label>
  <input type="text" name="B_ID"  value="<?php echo $B_ID; ?>" id="inputid"/>
</p>
<p>
  <label  for="email" id="preinput"> BOOK_NAME : </label>
  <input type="email" name="BOOK_NAME"  value="<?php echo $B_ID1; ?>" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> U_ID: </label>
  <input type="text" name=" U_ID" required placeholder="U_ID" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> NAME: </label>
  <input type="text" name="NAME" required placeholder="NAME" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput">ISSUED DATE: </label>
  <input type="date" name="DATE" required placeholder="NAME" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput">RETURNED DATE: </label>
  <input type="date" name="RETURN_DATE" required placeholder="NAME" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput">RETURNED ON: </label>
  <input type="date" name="RETURN_ON" required placeholder="NAME" id="inputid" />
</p>
<p>
  <input type="submit" name="send" value="Submit" id="inputid"  />
</p>
</form>
</div>
</body>
</html>