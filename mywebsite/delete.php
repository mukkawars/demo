<?php include "deconnection.php"?>

<?php 
session_start();
$uname = $_SESSION["susername"];

$sql ="delete from user_registration where username = '$uname'";

if(mysqli_query($con,$sql))
{
		header('Location: http://localhost/mywebsite/webpage.php');
}
else
{
		echo "error" . mysqli_error($con);
}


mysqli_close($con);
?>