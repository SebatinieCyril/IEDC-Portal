
<?php
$username = $_POST['username'];
$password = $_POST['password'];


$con=mysqli_connect("localhost","root","","registration");


$result = mysqli_query($con,"select * from users where username = '$username' and password = '$password'")
		or die("Failed to query database" .mysqli_error());

$row = mysqli_fetch_array($result);
if ($row['username'] == "admin" && $row['password']==$password)
{
 session_start();
header("Location: http://localhost/v.php");
}

elseif ($row['username'] == "$username" && $row['password'] == "$password")
{
	
header("Location: http://localhost/user.php");

}
else
{
	header("Location: http://localhost/error.php");
}
mysqli_close($con);
?>