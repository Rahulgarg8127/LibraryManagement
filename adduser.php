<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
* {
	margin:0;
	padding:0;
	margin:0 auto;
	
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
	margin-top:-600px;
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
<body>
<div class="menu">
  <div class="menu1">
  <ul>
  <li><a href="aa.php">HOME</a></li><br/>
<li><a href="addbook.php">ADD BOOKS</a></li><br/>
<li><a href="addbookview.php">VIEW BOOKS</a></li><br/>
<li><a href="adduser.php"  style="background-color:#7A991A;">ADD USER</a></li><br/>
<li><a href="userview.php">UPDATE USERS</a></li><br/>
<li><a href="searchuser.php">SEARCH USER</a></li><br/>
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
<li><a href="viewreturnedbooks.php">RETURNED BOOKS</a></li><br/>
<li><a href="searchreturnedbooks.php">VIEW RETURNED</a></li><br/>
</ul>
</div>
</div>
<div class="display">
<form action="adduserinsert.php" method="post" name="insertform">
<p>
  <label for="name" id="preinput"> USERNAME : </label>
  <input type="text" name="username" required placeholder="Enter username" id="inputid"/>
</p>
<p>
  <label for="name" id="preinput"> CLASS : </label>
  <input type="text" name="class" required placeholder="Enter Class" id="inputid"/>
</p>
<p>
  <label for="name" id="preinput"> ROLLNO. : </label>
  <input type="text" name="rollno" required placeholder="Enter Roll no." id="inputid"/>
</p>
<p>
  <label for="mobile" id="preinput"> PASSWORD: </label>
  <input type="text" name="password" required placeholder="Enter password" id="inputid" />
</p>
<p>
  <input type="submit" name="send" value="ADD" id="inputid"  />
</p>
</form>
</body>
</html>
