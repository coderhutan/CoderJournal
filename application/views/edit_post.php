<section class="post-box">
	<div class="row">
		<div class="large-12">
			<?php if($success==1) { ?>
				<p><em>This post has been updated! <a href="<?=base_url()?>" >Go Back</a></em></p>
			<?php } ?>
			<form action="<?=base_url()?>index.php/posts/editpost/<?=$post['postID']?>" method="post">
			<p>Title: <input name="title" type="text" value="<?=$post['title']?>"/></p>
			<p>Description: <br /> <textarea name="post"><?=$post['post']?></textarea></p>
			<p>Text Color: <input type="text" name="textcolor" value="<?=$post['textcolor']?>"></p>
			<p>Background Color: <input type="text" name="bgcolor" value="<?=$post['bgcolor']?>"></p>

			<p><input class="small button" type="submit" value="Edit Post" /></p>
			</form>
		</div>
	</div>
</section>