<?php
session_start();
if (isset($_SESSION["username"]) === false) {
    //prevent unauthorized access
    header("location:../includes/index.php?message=middleware");
    exit();
}
include_once("layouts/header.php");

?>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Your Posts</h4>
        </div>
        <div class="comment-widgets scrollable">

            <div class="d-flex flex-row comment-row m-t-0">
                <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle">
                </div>
                <div class="comment-text w-100">
                    <h6 class="font-medium">James Anderson</h6>
                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                        and type setting industry. </span>
                    <div class="comment-footer">
                        <span class="text-muted float-right">April 14, 2016</span>
                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?php include_once("layouts/footer.php"); ?>