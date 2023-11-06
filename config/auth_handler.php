<?php

//check if register fields are empty
function emptyRegisterFields($UserName, $Name, $UserEmail, $UserPassword, $UserConfirmPassword)
{
	$res = false;
	if (empty($UserName) || empty($Name) || empty($UserEmail) || empty($UserPassword) || empty($UserConfirmPassord)) {
		$res = true;
	} else {
		$res = false;
	}
	return $res;
}


//check if username  valid 
function validateUsername($UserName)
{
	$res = false;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $UserName)) {
		$res = true;
	} else {
		$res = false;
	}
	return $res;
}
//Validate email
function validateEmail($UserEmail)
{
	$res = false;
	;
	if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
		$res = true;
	} else {
		$res = false;
	}
	return $res;
}

//check if passwords match
function validatePassword($UserPassword, $UserConfirmPassword)
{
	$res = false;
	;
	if ($UserPassword !== $UserConfirmPassword) {
		$res = true;
	} else {
		$res = false;
	}
	return $res;
}

//check if username exists in database
function userNameExists($databaseConnection, $UserName, $UserEmail)
{

	//query user 
	$query = "SELECT * FROM users WHERE UserName=? OR UserEmail=?;";
	//initiate prepared statement
	$preparedStatement = mysqli_stmt_init($databaseConnection);

	//check if query will fail or succeed
	if (!mysqli_stmt_prepare($preparedStatement, $query)) {
		header("location:../auth/register.php?message=servererror");
		exit();
	}
	//if it succeeds
	mysqli_stmt_bind_param($preparedStatement, "ss", $UserName, $UserEmail);
	mysqli_stmt_execute($preparedStatement);

	$querydata = mysqli_stmt_get_result($preparedStatement);

	//get query data as associative array if there is data in database (true:false)

	if ($rowdata = mysqli_fetch_assoc($querydata)) {
		//used both in register and login
		return $rowdata;
	} else {
		$res = false;
		return $res;
	}
	//close db connection
	mysqli_stmt_close($preparedStatement);
}

//login user after successful registration


function createUser($databaseConnection, $UserName, $Name, $UserEmail, $UserPassword)
{

	//add user query 
	$query = "INSERT INTO users (UserName,Name, UserEmail,UserPassword) VALUES (?,?,?,?);";
	//initiate prepared statement
	$preparedStatement = mysqli_stmt_init($databaseConnection);

	//check if query will fail or succeed
	if (!mysqli_stmt_prepare($preparedStatement, $query)) {
		header("location:../auth/register.php?message=servererror");
		exit();
	}

	//if Query  succeeds
	//hash password
	$securepassword = password_hash($UserPassword, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($preparedStatement, "ssss", $UserName, $Name, $UserEmail, $securepassword);
	mysqli_stmt_execute($preparedStatement);
	mysqli_stmt_close($preparedStatement);
	//redirect user to dashboard after successful register
	header("location:../auth/login.php?success=registerusersuccessfully");
	exit();

}



//login 
//check if login fields are empty
function emptyLoginFields($UserName, $UserPassword)
{
	$res = false;
	if (empty($UserName) || empty($UserPassword)) {
		$res = true;
	} else {
		$res = false;
	}
	return $res;
}

//login user
function LoginUser($databaseConnection, $UserName, $UserPassword)
{
	$credentialsExists = userNameExists($databaseConnection, $UserName, $UserName);
	if ($credentialsExists === false) {
		header("location:../auth/login.php?message=usernotfound");
		exit();
	}
	$existingpassword = $credentialsExists["UserPassword"];
	//verify if passwords match
	$passwordsmatch = password_verify($UserPassword, $existingpassword); //returns true or false
	if ($passwordsmatch === false) {
		header("location:../auth/login.php?message=passworderror");
		exit();
	} else if ($passwordsmatch === true) {
		//start session
		session_start();
		$_SESSION["name"] = $credentialsExists["Name"];
		$_SESSION["ID"] = $credentialsExists["id"];
		$_SESSION["username"] = $credentialsExists["UserName"];
		header("location:../dashboard/index.php?success=welcome");
		exit();
	}
}