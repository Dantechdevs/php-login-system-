<?php
session_start();
if (isset($_SESSION["username"]) === false) {
    //prevent unauthorized access
    header("location:../includes/index.php?message=middleware");
    exit();
}
include_once("../layouts/header.php");

?>

<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="<?php echo APP_URL; ?>dashboard/tags/includes/storetag.php" method="POST">
            <div class=" card-body">
                <h4 class="card-title">Create Tag</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tag Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tagname" name="name">
                        <?php
                        if (isset($_GET["message"])) {
                            if ($_GET["message"] === "emptyInputField") {
                                //display error message if Tag is empty field
                                $m = "Tag Name cannot be empty";
                                echo '<p class="text-danger">' . $m . '</p>';
                            }
                            if ($_GET["message"] === "servererror") {
                                //display error message if Tag is empty field
                                $m = "something went wrong";
                                echo '<p class="text-danger">' . $m . '</p>';
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="border-top">
                <div class="card-body">
                    <input type="submit" class="btn btn-primary" name="submit" value="Create">
                </div>
            </div>
        </form>

    </div>
    <?php require_once("../layouts/footer.php"); ?>