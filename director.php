<?php
ini_set( "display_errors", 0);
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
<?php
include 'database.php';
?>
<?php
$myusername = $_SESSION['myusername'];
$sql1="SELECT score FROM members WHERE username='$myusername'";
$temp = mysql_query($sql1);
$row = mysql_fetch_array($temp);
$score = $row[score];
if($score != 35)
{
$str = "SELECT phpfile from answers WHERE question ='$score'";
$temp = mysql_query($str);
$row = mysql_fetch_array($temp);
$direct = $row[phpfile];
header("location:$direct");
}
else
{
	
	header('location:completed.php');
}
?>