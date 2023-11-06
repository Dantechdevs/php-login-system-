<?php

//prevent unauthorized access
if (!isset($_SESSION["username"])) {
    header("location:../includes/index.php?error=middleware");
    exit();
}