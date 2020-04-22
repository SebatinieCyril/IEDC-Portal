<?php

$en= $_POST['en'];
$date= $_POST['date'];
$time = $_POST['time'];
$details = $_POST['details'];
$ap = $_POST['ap'];
$_SESSION['success'] = "";
$link = mysqli_connect("localhost", "root", "", "registration");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO addevent (en, date, time,details,ap) VALUES ('$en', '$date','$time','$details', '$ap')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.<br>";
    echo '<a href="v.php">click here to go to home page<br>';
    echo '<a href="login.php">click here to log out <br>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);

?>