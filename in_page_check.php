<?php
ini_set( "display_errors", 0);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
session_start();
if(!isset($_COOKIE["myusername"])){
header("location:main_login.php");
}
include 'database.php';
$myusername = $_COOKIE['myusername'];
$sql2="SELECT question FROM answers WHERE phpfile='$pageName'";
$temp2 = mysql_query($sql2);
$row2 = mysql_fetch_array($temp2);
$pageno = $row2[question];
$sql1="SELECT score FROM members WHERE username='$myusername'";
$temp = mysql_query($sql1);
$row = mysql_fetch_array($temp);
$score = $row[score];
if($score != $pageno)
{
	header('location:director.php');
}
?>
