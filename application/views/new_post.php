<section class="post-box">
	<div class="row">
		<div class="large-12">
			<form action="<?=base_url()?>index.php/posts/new_post" method="post">
				<p>Title: <input name="title" type="text" /></p>
				<p>Description: <br /> <textarea name="post"></textarea></p>
				<p>Text Color: <input type="text" name="textcolor" placeholder="#222222"></p>
				<p>Background Color: <input type="text" name="bgcolor" placeholder="#fafafa"></p>
				<p><input class="small button" type="submit" value="Add Post" /></p>
			</form>
		</div>
	</div>
</section>