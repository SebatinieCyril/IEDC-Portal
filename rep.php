<?php
@$rname = $_POST['rname'];
$_SESSION['success'] = "";
$link = mysqli_connect("localhost", "root", "", "registration");
 

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO ereg (rname) VALUES ('$rname')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.<br>";
    echo '<a href="user.php">click here to go to home page<br>';
    echo '<a href="login.php">click here to log out <br>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);

?>