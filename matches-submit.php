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

		<h1>Matches for <?php echo $_GET["name"]; ?></h1>

		<?php
			//find the user
			$myFacts = findMe($_GET["name"]);
			$content = file("singles2.txt");
			//for each match option
			foreach ($content as $match){
				//seperate the line into an array
				$answer = explode(",", $match);
				//check if user and the match option to see if they match
				if(isMatch($myFacts, $answer) == true){
					$img = gender($answer);
		?>
		<div class="match">
		<p><img src=<?=$img?>><?= $answer[0] ?></p>
		<ul>
			<li><strong>gender:</strong><?= $answer[1] ?></li>
			<li><strong>age:</strong><?= $answer[2] ?></li>
			<li><strong>type:</strong><?= $answer[3] ?></li>
			<li><strong>OS:</strong><?= $answer[4] ?></li>
		</ul>
		</div>
		<?php } } ?>

		<div>
		<ul>
			<li>
				<a href="geekluv.php">
					<img src="back.gif" alt="icon" />
					Back to front page
				</a>
			</li>
		</ul>
	</div>
	</body>
</html>
