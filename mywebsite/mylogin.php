<?php include "deconnection.php"?>

<?php 
session_start();
$uname = $_REQUEST["txtname"];
$upass = $_REQUEST["txtpass"];

$sql = "select count(*) as cnt from user_registration where 
username = '$uname' and password = '$upass'";

//echo $sql;

 
$flag = 0;

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result))
{
		$flag = $row["cnt"];
		$_SESSION["susername"] = $uname;
}

?>
<tr>
<div style="width:100%;text-align:right">
	<a href="webaccout.php"> My Account </a>
	<a href="weblogout.php"> Logout </a>
</div>
</tr>


<?php
if($flag)
{
		echo "Welcome " . $uname;

}
else
{
	
	header('Location: https://localhost/mywebsite/webpage.php'.$flag);
}

mysqli_close($con);

?>