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
        <div class="card-body">

            <div class="row">
                <div class="col-md-9">
                    <?php
                    if (isset($_GET["success"])) {
                        if ($_GET["success"] === "tagcreated") {
                            //display error message if Tag is empty field
                            $m = "Tag Created Successfully";
                            echo '<p class="alert alert-success">' . $m . '</p>';
                        }

                    }
                    ?>
                    <h5 class="card-title m-b-0">Tags</h5>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo APP_URL; ?>dashboard/tags/create.php" class="btn btn-success btn-sm">
                        <i class="mdi-plus"></i>Add New Tag</a>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>
                        <a href="" class="btn btn-cyan btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<?php require_once("../layouts/footer.php"); ?>