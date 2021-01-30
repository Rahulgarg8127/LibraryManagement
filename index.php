<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
.logo{
background-color:#0099FF;
width:1532px;
height:130px;
margin-left:-7px;
margin-top:-8px;
}
.bg{
background-image:url(images/photo-1507842217343-583bb7270b66.jpg);

width:1532px;
height:610px;
margin-left:-8px;
}
#popup{
width:500px;
height:250px;
background-image:url(pip-bg.jpg);
position:absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
box-shadow: 1px 2px 5px 3px  black;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
#sub{
font-weight:500;
color:#FFFFFF;
}
.lib{
font-size:56px;
text-align:center;
volume:loud;
margin-top:-70px;
}
</style>
</head>

<body>
<div class="logo">
<div style="margin-left:4px" >
<img src="images/SelbyvilleLibrary_Logo_no_text.png" width="115px" height="129px"/>  <div class="lib"> <strong> LIBRARY</strong></div>
</div>
</div>
<div class="bg">

<div id="popup">
 <form method="post" action="validate_login.php" >
<table border="1" width="500px" height="250px" >
            <tr>
                <td><label for="users_email"><h3 id="sub"><strong>USERNAME</strong></h3></font></label></td>
                <td><input type="text" 
                  name="users_email" id="users_email"></td>
            </tr>
			
            <tr>
                <td><label for="users_pass"><h3 id="sub"><strong>Password</strong></h3></label></td>
                <td><input name="users_pass" 
                  type="password" id="users_pass"></input></td>
            </tr> 
			<tr>
			<td><input type="radio" name="myRadio" value="1" /><h3 id="sub"><strong> USER </strong></h3></td>
               <td><input type="radio" name="myRadio" value="2" /><h3 id="sub"><strong> ADMIN</strong></h3></td>
			</tr>
            <tr >
                <td colspan="2"><input type="submit" value="Submit"/>
                <input type="reset" value="Reset"/></td>
            </tr>
        </table>
</form>
</div>
</div>
</body>
</html>
