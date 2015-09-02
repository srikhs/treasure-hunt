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
$tbl_name="answers";
$qno = $_POST['question'];
$answer = $_POST['answer'];
$sql="SELECT * FROM $tbl_name WHERE question='$qno' and answers='$answer'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
	$score = $qno + 1;
	$username = $_SESSION['myusername'];
$scoreinc = "UPDATE members SET score = $score WHERE username='$username'"; 
mysql_query($scoreinc);	
header("location:director.php");
}
else 
{
	echo "Too Close!!";
}
?>

