<html>
<head>
<title>new event</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action ="qw.php" method="POST">

		<p>
			<label>enter event details</label><br><br>
		</p>
		<p>
			<label>EVENT NAME</label><br>
			<input type="text" id="en" name="en" required	/>
		</p>
		<p>
			<label>Date </label><br>
			<input type="text" id="date" name="date" required	/>
		</p>
		<p>
			<label>Time</label><br>
			<input type="text" id="time" name="time" required	/>
		</p>
		<p>
			<label>Details</label><br>
			<input type="text" id="details" name="details" required	/>
		</p>
		<p>
			<label> MAX Activity points</label><br>
			<input type="text" id="ap" name="ap" required	/>
		</p>
		<p>     
			<input type="submit" id="btn" value="add"	/>
		</p>
		</div>
</body>
</html>