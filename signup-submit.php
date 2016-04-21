<!DOCTYPE html>
<html>
	<!--
	Homework 6 (Geekluv)
	-->
	
	<head>
		<title>GeekLuv - Submitted</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="Geekluv.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php include 'common.php';
			//upload profile picture
			$target_dir = "images/";
			$check_file = $_FILES["pic"]["tmp_name"];
			$target_file = $target_dir . basename($_FILES["pic"]["name"]);
			uploadPic($target_file, $check_file);
		topImage(); ?>

		<div>
			<h1>Thank you!</h1>

			<p>Welcome to GeekLuv, <?php echo $_POST["firstname"]; ?>!</p>
			<p>Now <a href="matches.php">log in to see your matches!</a></p>
		</div>

		<?php
			//store results as a string in singles2.txt
			$results = $_POST["firstname"].",".$_POST["gender"].",".$_POST["age"].",".$_POST["personality"].",".$_POST["opsys"].",".$_POST["age_min"].",".$_POST["age_max"].",".$_POST["seek"];
			$file = "singles2.txt";
			$current = file_get_contents($file);
			$current .= $results."\n";
			file_put_contents($file, $current);

		?>

		<?php footer(); ?>
	</body>
</html>
