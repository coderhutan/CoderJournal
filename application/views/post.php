<?php if(!isset($post)) { ?>
	<p>This page was accessed incorrectly.</p>
<?php } else { 
		$color = $post['textcolor'];
		$background = $post['bgcolor'];
	?>
			<section class="post"  id="post" style="<?php echo "color: ".$color."; background-color: ".$background.";"; ?>">
				<div class="row">
					<div class="large-12">
						<h2 class="post-title" style="<?php echo 'color: '.$color.';'; ?>"><?=$post['title']?>
						</h2>

						<?=$post['post']?>
					</div>
				</div>
			</section>
<?php } ?>
