<!DOCTYPE html>
<html>
	<!--
	Homework 6 (Geekluv)
	-->
	
	<head>
		<title>GeekLuv - Sign Up</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="Geekluv.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php include 'common.php';
		topImage(); ?>

		<div>
			<form action="signup-submit.php" method="post" enctype="multipart/form-data">
				<fieldset>
				<legend>New User Signup</legend>

				<!-- name, 16 char -->
				<strong>Name:</strong>
				<input type ="text" name="firstname" size="16"><br>

				<!-- gender, radio -->
				<strong>Gender:</strong>
				<input type="radio" name="gender" value="M"> Male
				<input type="radio" name="gender" value="F" checked>Female<br>
				
				<!-- age, 6 char -->
				<strong>Age:</strong>
				<input type="text" name="age" size="6"><br>
				
				<!-- personality, 6 char wide but only 4 typed, link label -->
				<strong>Personality type:</strong>
				<input type="text" name="personality" size="6" maxlength="4">
				<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp" target="_blank">(Don't know your type?)</a>
				<br>
				
				<!-- favorite OS, dropdown select -->
				<strong>Favorite OS</strong>
				<select name="opsys">
					<option value="Windows">Windows
					<option value="Mac OS X">Mac OS X
					<option value="Linux">Linux
				</select>
				<br>
				
				<!-- seeking age, two 6 char wide text box with min and max -->
				<strong>Seeking age:</strong>
				<input type ="text" name="age_min" value="min" size="6">
				to
				<input type ="text" name="age_max" value ="max" size="6"><br>

				<!-- seeking gender, check -->
				<strong>Seeking Gender(s):</strong>
				<input type="checkbox" name="seek" value="M"> Male
				<input type="checkbox" name="seek" value="F">Female<br>

				<!--profile pic, file upload -->
				<strong>Photo:</strong>
				<input type="file" name="pic" />
				
				<!-- sign up - submit button to signup-submit.php -->
				<input type="submit" value="Submit">
			</fieldset>
			</form>
		</div>

		<?php footer(); ?>
	</body>
</html>
