<?php
ini_set( "display_errors", 0);
ob_start();
$host="jecgoogleit.db.10816090.hostedresource.com"; // Host name 
$username="jecgoogleit"; // Mysql username 
$password="S!rikhs123"; // Mysql password 
$db_name="jecgoogleit"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$dname=$_POST['dname'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
session_register("dname");

$dinsert="UPDATE members SET dname = '$dname' WHERE username = '$myusername'"; 
mysql_query($dinsert);
$sql1="SELECT score FROM members WHERE username='$myusername'";
$temp = mysql_query($sql1);
$row = mysql_fetch_array($temp);
$scorev = $row[score];
session_register("scorev");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>