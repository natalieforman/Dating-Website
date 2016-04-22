<!DOCTYPE html>
<html>
	<!--
	Homework 6 (Geekluv)
	This provided file is the front page that links to two of the files
	you are going to write, signup.php and matches.php.
	You can modify this file as necessary to move redundant code out to common.php.
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
			<form action="matches-submit.php <?php $_GET["name"] ?> " method="get">
				<fieldset>
				<legend>Returning User</legend>

				<!-- name, 16 char -->
				<strong>Name:</strong>
				<input type ="text" name="name" size="16"><br>
				
				<!-- sign up - submit button to matches-submit.php -->
				<input type="submit" value="View My Matches">
				</fieldset>
			</form>

		</div>

		<?php footer(); ?>
	</body>
</html>
