
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>EVENT</th>
<th>DATE</th>
<th>TIME</th>
<th>DETAILS</th>
<TH>ACTIVITY POINTS</TH>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "registration");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT en,date,time,details,ap FROM addevent";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc())
 {
echo " <tr><td>" . $row["en"]. "</td><td>" . $row["date"] . "</td><td>"
. $row["time"]. "</td><td>". $row["details"]. "</td><td>". $row["ap"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo '<center><h1><a href="user.php">CLICK TO GOTO HOME PAGE  <br></h1></center>';
echo '<center><H2><a href="re.php">CLICK TO REGISTER  <br></H2></center>';

?>

</table>
</body>
</html>