<section class="login">
	<div class="row">
		<div class="large-12">
			<h2>Login</h2>
			<?php if($error == 1) { ?>
				<p>Your username and password did not match.</p>
			<?php } ?>

			<form action="<?=base_url()?>index.php/users/login" method="post">
				<p><input type="text" name="username" class="username" placeholder = "Username"></p>
				<p><input type="password" name="password" class="password" placeholder = "Password"></p>

				<p><input type="submit" class="small button" value="Login"></p>
			</form>
		</div>
	</div>
</section>