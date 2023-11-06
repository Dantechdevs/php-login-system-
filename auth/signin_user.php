<?php

if (isset($_POST["submit"])) {

  //collect Login form data
  $UserName = $_POST["username"];
  $UserPassword = $_POST["password"];

  //connect to database
  require_once('../config/database.php');
  //include user register functions
  require_once('../config/auth_handler.php');
  //validate login inputs{{ make sure they are not empty }}
  if (emptyLoginFields($UserName, $UserPassword, ) !== false) {
    header("location:../auth/login.php?message=emptyInputFields");
    exit();
  }

  LoginUser($databaseConnection, $UserName, $UserPassword);

} else {
  header("location:../auth/login.php?message=servererror");
  exit();
}