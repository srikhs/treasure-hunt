<?php
ini_set( "display_errors", 0);
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
echo "You have successfully completed Hunting!";
?>
