<html>
<head>
<title>PHP Registration form</title>
</head>

<body style=color "lavender">
<?php

$uname = $_REQUEST["txtname"];
//$upass = $_REQUEST["psaaword"];



?>

<table align="center" border="2" width="50%" bgcolor="lavender">
<tr>
<th colspan="2"><h3> Registration Form </h3></th>
</tr>

<tr> 
<td>Username</td>
<td> <?php echo $uname ; ?></td>
</tr>
<tr> 
<td>Password</td>
<td> <?php echo $upass ; ?></td>
</tr>
</table>
</body>

</html>