
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php include "deconnection.php"?>

<?php

session_start();

if(isset($_REQUEST["flag"]))
{
		echo "<script> alert('record updated successfully') </script>";
}
$uname = $_SESSION["susername"];
$uemail = "";
$umobile = "";
$upass = "";


$sql = "select username,password,email,phone from user_registration where username = '$uname'";

//echo $sql;

$result  = mysqli_query($con,$sql);


if(mysqli_num_rows($result) >0 )
{
	while($row = mysqli_fetch_assoc($result))
	{
		$uemail = $row["email"];
		$upass = $row["password"];
		$umobile = $row["phone"];
	}
}
else
{
	echo "Error in fetching data for " . $uname;
}



mysqli_close($con);
?>
<form action="myupdate.php">
<table 
bgcolor="lavender" width="50%"
align="center"
>
<tr>
<th colspan="2"> User Signup </th>
</tr>
<tr>
<td>
Username 
</td>
<td>
<output> <?php echo $uname ; ?> </output>
<!--value="Parag" autocomplete readonly-->
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input type="password" id="txtpass" name="txtpass" 
 autofocus 
placeholder = "Enter Password"
value = "<?php echo $upass;?>"
/>
<div id="errp"></div>
</td>
</tr>
<tr>
<td>
Retype Password
</td>
<td>
<input type="password" id="txtrpass" name="txtrpass" 
 autofocus 
placeholder = "Re-Enter Password" 
/>
</td>
</tr>
<tr>
<td>
email
</td>
<td>
<input type="email" name="txtemail" 
 autofocus 
placeholder = "Enter Email" required
value = "<?php echo $uemail;?>"
/>
</td>
</tr>
<tr>
<td>
Mobile
</td>
<td>
<input type="number" name="mobile" 
 autofocus 
placeholder = "Enter Mobile" 
value = "<?php echo $umobile;?>"
/>
</td>
</tr>
<tr>
<th colspan="2"> <input type="submit" class="btn btn-primary" value="Update"/> 
<a href="delete.php" class="btn btn-primary"> Delete </a>
</th>
</tr>
</table>
</form>
</body>
