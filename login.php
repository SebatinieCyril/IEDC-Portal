<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action ="process.php" method="POST">
		<h1>
			<label>IEDC PORTAL</label><br><br>
		</h1>
		<h2>
			<label> LOGIN </label><br><br>
		</h2>
	<p>
			<label>Username:</label><br>
			<input type="text" id="username" name="username" required	/>
		</p>
		<p>
			<label>Password:</label><br>
			<input type="password" id="password" name="password" required	/>
		</p>
		<p>
		<P align=left><input type="submit" id="btn" value="LOGIN"	/></p>
		</p>
	<h5>
  		New user  <a href="new.php"> Sign up</a>
  	</h5>

	</div>
</body>
</html>