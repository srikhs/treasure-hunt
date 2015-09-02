<?php
include 'database.php';
?>
<?php
$tbl_name = answers;
$answer = $_POST['answer'];
$filename = $_POST['filename'];
$qno = $_POST['qno'];
if($qno != NULL && $answer != NULL && $filename != NULL)
{
$feed = "INSERT INTO answers(question,answers, phpfile) VALUES('$qno','$answer','$filename')";
mysql_query($feed);
echo "Successfully Added";
}
else
{
	echo " Enter Valid Details";
}
?>


