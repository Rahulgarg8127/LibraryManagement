<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
* {
	margin:0;
	padding:0;
	
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
	margin-left:500px;
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
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color:#000000;
}

.pagination a:hover:not(.active) {background-color:#0033FF; color:#000000;}
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
<div class="pagination" align="center" style="margin-left:360px">
  <a href="#" style="width:70px; color:#000000; background-color:#FFFFFF;">&laquo;</a>
  <a href="#" style="width:70px; color:#000000; background-color:#0099CC;">1</a>
  <a class="active" href="#" style="width:70px; background-color:#0099CC;">2</a>
  <a href="#" style="width:70px; color:#000000; background-color:#0099CC;">3</a>
  <a href="#" style="width:70px; color:#000000; background-color:#0099CC;">4</a>
  <a href="#" style="width:70px; color:#000000; background-color:#0099CC;">5</a>
  <a href="#" style="width:70px; color:#000000; background-color:#0099CC;">6</a>
  <a href="#" style="width:70px; color:#000000; background-color:#FFFFFF;">&raquo;</a>
</div>
<div class="menu">
  <div class="menu1">
  <ul>
  <li><a href="aa.php">HOME</a></li><br/>
<li><a href="addbook.php" style="background-color:#7A991A;">ADD BOOKS</a></li><br/>
<li><a href="addbookview.php">VIEW BOOKS</a></li><br/>
<li><a href="adduser.php">ADD USER</a></li><br/>
<li><a href="adduserview.php">VIEW USERS</a></li><br/>
<li><a href="searchuser.php">SEARCH USER</a></li><br/>
<li><a href="userview.php">UPDATE USERS</a></li><br/>
<li><a href="issuebook.php">ISSUE BOOK</a></li><br/>
<li><a href="issuebookview11.php">VIEW ISSUED BOOKS</a></li><br/>
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
<li><a href="viewreturnedbooks.php">RETURNED BOOKS</a></li><br/>
<li><a href="searchreturnedbooks.php">VIEW RETURNED</a></li><br/>
</ul>
</div>
</div>
</div>
<div class="display">
<form action="addbookinsert.php" method="post" name="insertform">
<p>
  <label for="name" id="preinput"> BOOK NAME : </label>
  <input type="text" name="bookname" required placeholder="Enter BOOK name" id="inputid"/>
</p>
<p>
  <label  for="genre" id="preinput"> GENRE : </label>
  <input type="text" name="genre" required placeholder="Enter GENRE" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> PRICE : </label>
  <input type="text" name="price" required placeholder="Enter PRICE" id="inputid" />
</p>
<p>
  <label for="name" id="preinput"> STOCK : </label>
  <input type="text" name="STOCK" required placeholder="Enter no. of books" id="inputid" />
</p>
<p>
  <input type="submit" name="send" value="ADD" id="inputid"  />
</p>
</form>
</div>
</body>
</html>
