<?php include "deconnection.php"?>

<?php 
session_start();
$uname = $_SESSION["susername"];
$upass = $_REQUEST["txtpass"];
$uemail = $_REQUEST["txtemail"];
$umobile = $_REQUEST["mobile"];

$sql = "update user_registration
set password = '$upass',
txtemail = '$uemail',
phone = $umobile
where username = '$uname'";

//echo $sql;

if(mysqli_query($con,$sql))
{
		header('Location: https://localhost/mywebsite/webaccout.php');
}
else
{
		echo "error" . mysqli_error($con);
}

mysqli_close($con);
?>