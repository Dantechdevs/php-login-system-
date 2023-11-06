<?php

session_start();
session_unset();
session_destroy();

header("location:../auth/login.php?success=logout");
exit();