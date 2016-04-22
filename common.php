<?php 
	//common code for top banner
	function topImage(){
?>
	<div id="bannerarea">
	<img src="nerdxing.jpg" alt="banner logo" /> <br />
	where meek geeks meet
	</div>
<?php 
	}
?>

<?php
	//common code for bottom footer
	function footer(){
?>
	<div>
		<p>
			This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
		</p>
		
		<p>
			Results and page (C) Copyright Geekluv Inc.
		</p>
		
		<ul>
			<li>
				<a href="geekluv.php">
					<img src="back.gif" alt="icon" />
					Back to front page
				</a>
			</li>
		</ul>
	</div>		
<?php 
	}
?>

<?php
	//function used to retrieve the information of the user
	function findMe($name){
		$content = file("singles2.txt");
		foreach ($content as $match){
			$answer = explode(",", $match);
			//find the file that matches you
			if($answer[0] == $name){
				return $answer;
			}
		}
	}
?>

<?php
	//compare the user and the match option
	function isMatch($user, $check){
		//gender
		$checkGender = $check[1];
		$prefGender = $user[7];
		if($user != null){
			if(preg_match("/[".$checkGender."]/", $prefGender)){
			//min and max age
			$minAge = $user[5];
			$maxAge = $user[6];
			$checkAge = $check[2];
			if( $minAge <= $checkAge && $checkAge <= $maxAge){
				//operating system
				$checkOS = $check[4];
				$userOS = $user[4];
				if(($userOS == "Windows" && $checkOS == "Windows")||($userOS != "Windows" && $checkOS != "Windows")){
					//personality type
					$checkPers = $check[3];
					$userPers = $user[3];
					if(preg_match("/[".$checkPers."]/", $userPers)){
						$checkName = $check[0];
						$userName = $user[0];
						//make sure it the match isn't yourself
						if($userName != $checkName){
							return true;
						}
					}
				}
			}
		}
		}
		return false;
	}
?>

<?php 
	//pick which photo to display
	function gender($answer){
		$name = $answer[0];
		$name = strtolower($name);
		$name = preg_replace("/[\s]/", "_", $name);
		$check = "images/".$name.".jpg";
		if (file_exists($check)){
			$link = $check;
		}
		//if they don't have a photo, default male or female
		else{
			if($answer[1] == "F"){
				$link = "images/user.png";
			}
			else{
				$link="images/userm.png";
			}
		}
		return $link;
	}
?>

<?php
	//upload image chosen
	function uploadPic($target_file, $check_file){
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	   	$check = getimagesize($check_file);
	    if($check !== false) {
	        $uploadOk = 1;
	    }
	    else {
	        $uploadOk = 0;
	    }

	    if ($uploadOk == 0) {
		} 
		else {
			// if everything is ok, try to upload file
		    move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
		}
	}
?>