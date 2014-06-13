<html>
	<head>
		<title>Coder Journal</title>
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/foundation.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/style.css">
		<script>
			function delete_post(id) {
				var x = confirm("Are you sure you want to delete this post?");
				if(x == true) {
					window.location = "<?=base_url()?>index.php/posts/deletepost/" + id + "/";
					return false;
				}
			}
		</script>

	</head>
	<body>
		<header>
			<h1><a href="<?=base_url()?>">Coder Journal</a></h1>
			<div class="login-in	fo">
				<?php
				if($this->session->userdata('userID')) { ?>
					<p>You are logged in, <?=$this->session->userdata('username')?>!</p>
					<p><a href="<?=base_url()?>index.php/posts/new_post">New Post</a></p>
					<p><a href="<?=base_url()?>index.php/users/logout">Logout</a></p>
				<?php } else { ?>
					<p><a href="<?=base_url()?>index.php/users/login">Login</a></p>
				<?php } ?>
			</div>
		</header>