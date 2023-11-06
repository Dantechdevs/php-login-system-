<?php
if (isset($_GET["success"])) {

	if ($_GET["success"] === "registerusersuccessfully") {
		//display success message if user is registered succssfly
		$m = "Registered Successfully , Thank You for Joining Us";
		echo '<p class="success">' . $m . '</p>';
	}
	if ($_GET["success"] === "welcome") {
		//display success message if user is registered succssfly
		$m = "welcome Back";
		echo '<p class="success">' . $m . '</p>';
	}
	if ($_GET["success"] === "logout") {
		//display success message if user is registered succssfly
		$m = "Bye See You Later!";
		echo '<p class="success">' . $m . '</p>';
	}
}