<?php

//check if the user clicked register submit button

if (isset($_POST["submit"])) {
    //collect Register form data
    $UserName = $_POST["username"];
    $Name = $_POST["name"];
    $UserEmail = $_POST["email"];
    $UserPassword = $_POST["password"];
    $UserConfirmPassword = $_POST["confirmpassword"];

    //connect to database
    require_once('../config/database.php');
    //include user register functions
    require_once('../config/auth_handler.php');

    //validate register inputs{{ make sure they are not empty }}
    if (emptyRegisterFields($UserName, $Name, $UserEmail, $UserPassword, $UserConfirmPassword) !== false) {
        header("location:../auth/register.php?message=emptyInputFields");
        exit();
    }
    //validate username
    if (validateUsername($UserName) !== false) {
        header("location:../auth/register.php?message=invalidUsername");
        exit();
    }
    //validate Email
    if (validateEmail($UserEmail) !== false) {
        header("location:../auth/register.php?message=invalidEmail");
        exit();
    }
    //validate Passwords 
    if (validatePassword($UserPassword, $UserConfirmPassword) !== false) {
        header("location:../auth/register.php?message=invalidPassword");
        exit();
    }
    //validate Username exist 
    if (userNameExists($databaseConnection, $UserName, $UserEmail) !== false) {
        header("location:../auth/register.php?message=userNameExists");
        exit();
    }

    //after validation 
    //create user after successful  validation
    createUser($databaseConnection, $UserName, $Name, $UserEmail, $UserPassword);

} else {
    header("location:../auth/register.php?message=servererror");
    exit();
}