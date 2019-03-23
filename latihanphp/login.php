<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body>
	<h3>Form Login</h3>
	<form method="post" action="auth.php" style="border: dashed; border-width: 5px; width: 200px">
		<label for="u">username</label>
		<input type="text" id="u" name="user">
		<br>
		<label for="p">password</label>
		<input id="p" type="password" name="pass"><br>

		<button type="submit">post</button>
	</form>
</body>
</html>