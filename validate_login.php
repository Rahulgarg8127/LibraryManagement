<?php

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];
$myRadio = intval($_POST['myRadio']);

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("library",$con);

$result = mysql_query("SELECT USERNAME, PASSWORD FROM login WHERE USERNAME = '$email'");

$row = mysql_fetch_array($result);


if($row["USERNAME"]==$email && $row["PASSWORD"]==$pass)
{
      if ($myRadio === 2)
       {
    header("Location: aa.php");
    die;
       } else {
    header("Location: user.php?email=$email");
    die;
        }
		}
else
{
    echo"Sorry, your credentials are not valid, Please try again.";
}
?>

