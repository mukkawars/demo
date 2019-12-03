<?php 
$servername = "localhost";
$username = "root";
$userpass = "";
$dbname = "mydatabase";

$con = mysqli_connect($servername,$username,$userpass,$dbname);

if(!$con)
{
		die("Connection Failed ".mysqli_connect_error());
}
?>