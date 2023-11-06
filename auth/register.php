<?php
session_start();
if (isset($_SESSION["username"]) === true) {
  //prevent unauthorized access
  header("location:../dashboard/index.php?message=welcome");
  exit();
}
include_once('../layouts/header.php');

?>


<div class="col-md-6 pb-5 pt-5">
  <h4>Account/register</h4>
  <div class="contact-form">
    <?php require_once('../includes/error_messages.php'); ?>
    <form action="<?php echo APP_URL; ?>auth/create_user.php" method="POST">
      <div class="control-group pb-3">
        <input type="text" class="form-control" name="name" placeholder="Your Name" />
      </div>
      <div class="control-group pb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" />
      </div>
      <div class="control-group pb-3">
        <input type="email" class="form-control" name="email" placeholder="Your Email" />
      </div>


      <div class="control-group pb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" />
      </div>
      <div class="control-group pb-3">
        <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" />
      </div>
      <div>
        <input class="btn btn-primary" type="submit" value="Register" name="submit">
      </div>
    </form>
  </div>
</div>

<?php include_once('../layouts/footer.php'); ?>