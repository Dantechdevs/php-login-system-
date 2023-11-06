<?php

if (isset($_GET["message"])) {
	//display error for empty input fields
	if ($_GET["message"] === "emptyInputFields") {
		$m = "Some fields are empty";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "invalidUsername") {
		//display error if username is invalid
		$m = "invalid username";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "invalidEmail") {
		//display error if email is invalid
		$m = "Please Enter a Valid Email";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "invalidPassword") {
		//display error if passwords dont Match
		$m = "password dont match";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "userNameExists") {
		//display error if username is taken
		$m = "username is taken";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "servererror") {
		//display error if stmt failed
		$m = "Something went wrong ,Please try again later";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "usernotfound") {
		$m = "Credentials do not match our Records  ,Please try again ";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "passworderror") {
		$m = "Incorrect Password ,Please try again ";
		echo '<p class="error">' . $m . '</p>';
	} else if ($_GET["message"] === "middleware") {
		$m = "Unauthorized Access ";
		echo '<p class="error">' . $m . '</p>';
	}




}