<html>
<head>
	<title>new registration page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
	<div id="frm">
		<form action ="registration.php" method="POST">
		<p>
			<label>REGISTRATION</label><br><br>
		</p>
		<p>
			<label>New user</label><br><br>
		</p>
		<p>
			<label>First name:</label><br>
			<input type="text" id="Fname" name="Fname" required	/>
		</p>
		<p>
			<label>Last name:</label><br>
			<input type="text" id="Lname" name="Lname" required	/>
		</p>
		<p>
			<label>Username:</label><br>
			<input type="text" id="username" name="user" required	/>
		</p>
		<p>
			<label>Password:</label><br>
			<input type="password" id="password" name="pass" required	/>
		</p>
		<p>
			<label>Email:</label><br>
			<input type="text" id="email" name="email" required     />
	    </p>
		<p>
			<label>branch:</label><br>
			<input type="text" id="branch" name="branch" required     />
		</p>
		<p>
			<label>Sem:</label><br>
			<input type="number" id="sem" name="sem" required     />
		</p>
		<p>
			<label>Phone :</label><br>
			<input type="number" id="phone" name="no" required     />
		</p>
		<p>

			<label>Sign Up:</label><br>
			     
			<input type="submit" id="btn" value="Sign up"	/>
		</p>
		<p>

	</div>
</body>
</html>