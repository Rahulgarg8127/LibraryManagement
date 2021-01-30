
<?php 
ob_start();
include('addbookdb.php');
if(isset($_GET['B_ID']))
{
  $B_ID=$_GET['B_ID'];
  if(isset($_POST['update']))
  {
  $EBOOK_NAME=$_POST['EBOOK_NAME'];
  $EGENRE=$_POST['EGENRE'];
  $EPRICE=$_POST['EPRICE'];
  $ESTOCK=$_POST['ESTOCK'];
  $updated=mysql_query("UPDATE books SET 
		BOOK_NAME='$EBOOK_NAME', GENRE='$EGENRE', PRICE='$EPRICE', STOCK='$ESTOCK' WHERE B_ID='$B_ID'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:addbookview.php');
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
margin-top:-700px;
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
<li><a href="search.php">SEARCH ISSUED BOOKS</a></li><br/>
</ul>
</div>
</div>
<?php 
  if(isset($_GET['B_ID']))
  {
  $B_ID=$_GET['B_ID'];
  $getselect=mysql_query("SELECT * FROM books WHERE B_ID='$B_ID'");
  while($profile=mysql_fetch_array($getselect))
  {
    $BOOK_NAME=$profile['BOOK_NAME'];
    $GENRE=$profile['GENRE'];
    $PRICE=$profile['PRICE'];
	$STOCK=$profile['Stock'];
?>
<div class="display">
<form action="" method="post" name="insertform">
<p>
  <label for="name" id="preinput"> BOOK NAME : </label>
  <input type="text" name="EBOOK_NAME" required placeholder="Enter BOOK name" value="<?php echo $BOOK_NAME; ?>" id="inputid"/>
</p>
<p>
  <label  for="genre" id="preinput"> GENRE : </label>
  <input type="text" name="EGENRE" required placeholder="Enter GENRE" value="<?php echo $GENRE; ?>" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> PRICE : </label>
  <input type="text" name="EPRICE" required placeholder="Enter PRICE" value="<?php echo $PRICE; ?>" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> STOCK : </label>
  <input type="text" name="ESTOCK" required placeholder="Enter No. of books" value="<?php echo $STOCK; ?>" id="inputid" />
</p>
<p>
  <input type="submit" name="update" value="UPDATE" id="inputid"  />
</p>
</form>
</div>
<?php } } ?>
</body>
</html>