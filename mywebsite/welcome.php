<body>
<?php include "deconnection.php"?>
<?php
session_start();
$upsd ="";
$umobile = "987456321";
/*
$uname = $_REQUEST["txtname"];
$upass = $_REQUEST["txtpass"];
$uemail = $_REQUEST["email"];
$ugender = $_REQUEST["rdogender"];
*/
if (isset($_COOKIE["cname"]))
	$uname = $_COOKIE["cname"];
else
	$uname = "Guest";


if (isset($_COOKIE["cemail"]))
	$uemail = $_COOKIE["cemail"];
else
	$uemail = "abc@abc.com";


if (isset($_COOKIE["spass"]))
	$upsd = $_COOKIE["spass"];

if (isset($_SESSION["smobile"]))
	$umobile = $_SESSION["smobile"];

if(isset($_COOKIE["sdob"]))
	$udob =$_COOKIE["sdob"];


if(isset($_SESSION["sgen"] ))
	$ugen =$_SESSION["sgen"] ;

if(isset($_SESSION["sage"] ))
	$uage =$_SESSION["sage"] ;


/*
$_SESSION["spass"] = $upass;
$_SESSION["smobile"] = $umobile; */






?>
<?php
/*

if(isset($_SESSION["sage"] ))
	$uage =$_SESSION["sage"] ;

 echo "connection successfull" ;
*/

$sql = "insert into user_registration (username,password,email,phone, dob,gender,age)
values ('$uname','$upsd','$uemail',$umobile,'$udob','$ugen',$uage)";

if(!mysqli_query($con,$sql))
{
	echo "Error : " . $sql . "  " . mysqli_error($con);	
}
else
{
?>

<h3>
Dear <?php echo $uname ;?> you are successfully registered with our website , you will
soon get an email on your registered <?php echo $uemail;?> and password will be sent on given mobile 
<?php echo $umobile;
}
mysqli_close($con);
?>
</h3>

</body>