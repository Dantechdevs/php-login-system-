<?php
if (isset($_POST["submit"])) {
    //collect form data
    $tagname = $_POST["name"];
    //connect to database
    require_once('../../../config/database.php');
    //include tag create functions
    require_once('./tag_handler.php');
    //validate register inputs{{ make sure they are not empty }}
    if (emptyTagField($tagname) !== false) {
        header("location:../create.php?message=emptyInputField");
        exit();
    }

    //store tag to database
    storeTag($databaseConnection, $tagname);


}