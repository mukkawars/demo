<html>
<head>
<title>PHP Registration form</title>
</head>

<body style=color "lavender">
<?php
session_start();

$uname = $_REQUEST["txtname"];
$upsd =$_REQUEST["txtpass"];
$umail =$_REQUEST["Emailenter"];
$unum=$_REQUEST["mobile"];
$udob=$_REQUEST["txtdob"];
$ugen=$_REQUEST["rdogender"];
$uage=$_REQUEST["Agename"];
$uprofile =$_REQUEST["profile"];

setcookie("cname",$uname,time()+3600);
setcookie("cemail",$umail,time()+3600);
setcookie("spass",$upsd,time()+3600);
setcookie("sdob",$udob,time()+3600);

$_SESSION["smobile"] = $unum;

$_SESSION["sgen"] = $ugen;
$_SESSION["sage"] = $uage;


?>
<form action="welcome.php">
<table align="center" border="2" width="50%" bgcolor="lavender">
<tr>
<th colspan="2"><h3> Registration Form </h3></th>
</tr>

<tr> 
<td>Username</td>
<td> <?php echo $uname ; ?></td>
</tr>

<tr> 
<td>password</td>
<td> <?php echo $upsd ; ?></td>
</tr>

<tr> 
<td>Email</td>
<td> <?php echo $umail ; ?></td>
</tr>


<tr> 
<td>Number</td>
<td> <?php echo $unum ; ?></td>
</tr>

<tr> 
<td>dob</td>
<td> <?php echo $udob ; ?></td>
</tr>

<tr> 
<td>Gender</td>
<td> <?php echo $ugen ; ?></td>
</tr>

<tr> 
<td>Age</td>
<td> <?php echo $uage ; ?></td>
</tr>

<tr> 
<td nowrap> Profile Picture </td>
<td nowrap> <img src="img/<?php echo $uprofile ; ?>" height="100" width="100"></td>
</tr>

<tr> 
<td colspan="2" align="center"><input type="submit" value="submit"/></td>

</tr>


</table>
</form>
</body>

</html>