<?php	if(!isset($posts)) {
		?>
		<p>There are no posts on this blog.</p>
		<?php
	} else {
		foreach($posts as $row) {
			$color = $row['textcolor'];
			$background = $row['bgcolor'];
			?>
			<section class="post" style="<?php echo "color: ".$color."; background-color: ".$background.";"; ?>">
				<div class="row">
					<div class="large-12">
						<h2 class="post-title"><a style="<?php echo 'color: '.$color.';'; ?>" href="<?=base_url()?>index.php/posts/post/<?=$row['postID']?>#post"><?=$row['title']?></a>
						</h2>
						<div class="post-menu">
							<?php if($this->session->userdata('userID')) { ?>
									 <a class="tiny button" href="<?=base_url()?>index.php/posts/editpost/<?=$row['postID']?>">Edit</a>
									<button class="tiny button" onclick="delete_post(<?=$row['postID']?>)">Delete</button>
							<?php } ?>
						</div>
						<?=strip_tags($row['post'], '<p><a><strong><em>')?>
					</div>
				</div>
			</section>			
			<?php
		}
	}
?>
<div class="pagination">
	<?=$pages?>
</div>