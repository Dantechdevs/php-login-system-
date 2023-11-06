<?php
include_once('../layouts/header.php');

?>

<div class="col-md-6 pb-5 pt-5">
	<h4>Account/Login</h4>
	<div class="contact-form">
		<?php
		include_once('../includes/error_messages.php');
		include_once('../includes/success_messages.php');
		?>
		<form action="<?php echo APP_URL; ?>auth/signin_user.php" method="POST">

			<div class="control-group pb-3">
				<input type="text" class="form-control" name="username" placeholder="Email/Username" />
			</div>



			<div class="control-group pb-3">
				<input type="password" class="form-control" name="password" placeholder="Password" />
			</div>

			<div>
				<input class="btn btn-primary" type="submit" value="Login" name="submit">
			</div>
		</form>
	</div>
</div>

<?php include_once('../layouts/footer.php'); ?>