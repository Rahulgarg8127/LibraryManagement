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
margin-top:-700PX;
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
<li><a href="userview.php"  >UPDATE USERS</a></li><br/>
<li><a href="searchuser.php">SEARCH USER</a></li><br/>
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
</ul>
</div>
</div>


<?php 
  if(isset($_GET['B_ID']))
  {
  $B_ID=$_GET['B_ID'];
  $B_ID1=$_GET['BOOK_NAME'];
  $STOCK=$_GET['STOCK'];
  $GENRE=$_GET['GENRE'];
  $PRICE=$_GET['PRICE'];
	}
	$t=time();
	
	if(($STOCK)>0)
	{
	
	?>

<div class="display">
<form action="issuebookform11insert.php" method="post" name="insertform">
<p>
  <label for="name" id="preinput"> B_ID : </label>
  <input type="text" name="B_ID"  value="<?php echo $B_ID; ?>" id="inputid"/>
</p>
<p>
  <label  for="bookname" id="preinput"> BOOK_NAME : </label>
  <input type="text" name="BOOK_NAME"  value="<?php echo $B_ID1; ?>" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> U_ID: </label>
  <input type="text" name=" U_ID" required placeholder="U_ID" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> ISSUE DATE: </label>
  <input type="text" name=" ISSUE_DATE"  value="<?php echo date("Y/m/d"); ?>" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> STOCK: </label>
  <input type="text" name=" STOCK"  value="<?php echo $STOCK; ?>" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> TIME: </label>
  <input type="text" name=" TIME"  value="<?php echo $t; ?>" id="inputid" />
</p>
<p>
  <input type="submit" name="send" value="Submit" id="inputid"  />
</p>
</form>
</div>
<?php
}
else{
      $msg="Stock not avilable!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	   ;
	  }
	  ?>
</body>
</html>