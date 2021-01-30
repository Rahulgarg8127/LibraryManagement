<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
  .profile{
  width:40%;
  margin-left:20%;
  margin-top:8%;
  }
  .text{
  font-size:46px;
  margin-left:24%;
  }
  .books{
  width:40%;
  margin-top:-24.4%;
  margin-left:56%;
  }
  .text1{
  font-size:46px;
  margin-left:61%;
  }

</style>
</head>

<body>
<div align="center" style="font-size:60px">STUDENT</div>


<?php 
  
  
  if(isset($_GET['email']))
  {
  $email=$_GET['email'];
  }

?>
	<div align="right" style="font-size:40px">Welcome,   <?php echo $email;?></div>
   <div class="profile">
   <a href="userprofile.php?email=<?php echo $email; ?>"><img src="images/best-free-staff-man-profile-person-icon-circle-photos.jpg" width="50%" /></a>
   </div>
   <div class="text">PROFILE</div>
   
    <div class="books">
   <a href="userissuebook.php?email=<?php echo $email; ?>"><img src="images/10-101646_borrow-library-books-book-stack-books-icon.png" width="50%" /></a>
   </div>
    <div class="text1">ISSUED<BR/>BOOKS</div>
	
	
</body>
</html>
