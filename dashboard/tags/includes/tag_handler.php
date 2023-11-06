<?php


function emptyTagField($tagname)
{
    $res = false;
    if (empty($tagname)) {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}

function storeTag($databaseConnection, $tagname)
{

    //add tag query 
    $query = "INSERT INTO tags (TagName) VALUES (?);";
    //initiate prepared statement
    $preparedStatement = mysqli_stmt_init($databaseConnection);



    //check if query will fail or succeed
    if (!mysqli_stmt_prepare($preparedStatement, $query)) {
        header("location:../create.php?message=servererror");
        exit();
    }

    //if Query  succeeds
    mysqli_stmt_bind_param($preparedStatement, "s", $tagname);
    mysqli_stmt_execute($preparedStatement);
    mysqli_stmt_close($preparedStatement);
    //redirect user to dashboard after successful register
    header("location:../index.php?success=tagcreated");
    exit();
}