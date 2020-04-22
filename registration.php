<?php
$fname= $_POST['Fname'];
$lname= $_POST['Lname'];
$username = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$no = $_POST['no'];
$_SESSION['success'] = "";
if ( !empty($username)) 
{
	$db=mysqli_connect("localhost","root","","registration");
	$check=mysqli_query($db,"select * from users where username='$username'");
	$checkrows=mysqli_num_rows($check);
	if($checkrows>0)
	{
		echo "user exists";
   	}
	else
	{  
		$sql = "INSERT INTO users (fname,lname,username,password,email,branch,sem,no) VALUES('$fname','$lname','$username','$password','$email','$branch','$sem','$no')";
		mysqli_query($db, $sql);
		header('location: user.php');
	}
}		
mysqli_close($db);
?>
