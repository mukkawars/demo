<?php include ="deconnection.php" ?>

<?php 
$uname=$_REQUEST["txtname"];

$sql ="select username from user_registration where username="$uname";

$result ="mysqli_query($con,&sql)";

