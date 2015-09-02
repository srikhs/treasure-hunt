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
$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 
$dname=$_POST['display_name'];
$myyear=$_POST['year'];
$mycollege=$_POST['college'];
$section=$_POST['section_name'];
//$myemail=$_POST['email'];

// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "User already Exists!!";

}
else {
$add="INSERT INTO $tbl_name(username, password, dname, year, college, section) values('$myusername','$mypassword','$dname','$myyear','$mycollege','$section');";
mysql_query($add);

session_register("myusername");
session_register("mypassword"); 
session_register("dname");
session_register("myyear");
session_register("mycollege");
session_register("section");
header("location:login_success.php");
}
ob_end_flush();
?>