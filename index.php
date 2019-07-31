<?php
include ('register.php');

?>



<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<h1>REGISTRATION FORM</h1>
	<div class="container">
<div class="form">
	<form method="post" action="register.php">
		<label>name</label>
		<input type="text" name="name"><br>

		<label>email address</label>
		<input type="email" name="email"><br>


		<label>password</label>
		<input type="password" name="password"><br>

		<label>confirm password</label>
		<input type="password" name="confirm"><br>

		<label>first name</label>
		<input type="text" name="first_name"><br>

		<label>last name</label>
		<input type="text" name="last_name"><br>

		<label>gender</label>
		<input type="radio" name="gender" value="male">male
		<input type="radio" name="gender" value="female">female<br>


		<label>address</label>
		<input type="text" name="address"><br>

		<label>date of birth</label>
		<input type="date" name="birth"><br>

		<label>status</label>
		<input type="radio" name="status" value="married">married
		<input type="radio" name="status" value="unmarried">unmarried<br>

		<label>Tell about yourself</label>
		<textarea name="introduction" required></textarea> <br>

		<label>describe you in one word</label>
		<input type="text" name="describe" required><br>

		<label>skills</label>
		<input type="checkbox" name="skill[]" value="HTML">HTML
		<input type="checkbox" name="skill[]" value="javascript">javascript
        <input type="checkbox" name="skill[]" value="python">python
        <input type="checkbox" name="skill[]" value="jquery">jquery<br><br>




		<input type="submit" name="submit" value="submit">	

	</form>
</div>
</div>

</body>
</html>