<?php echo get_header(); ?>

			
			<!-- PORTFOLIO-WRAPPER -->
			<div class="portfolio-wrapper container">
				<!-- PORTFOLIO -->
				<div class="portfolio col-3" data-space="20">
					
					<?php 
						if (have_posts()) : while (have_posts()) : the_post(); 
						
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							// $imgthumb= the_post_thumbnail('thumbnail');
							// $imgfull= the_post_thumbnail('full');
						}
						$imgsrc=get_post_thumbnail_url(get_the_ID());
						
						
					?>
					<!-- PORTFOLIO ITEM -->
					<div class="item" data-groups="branding">
						<a href="<?php the_permalink(); ?>" target="_blank">
							<div class="item-img" style="background-image: url('<?php echo $imgsrc;?>')"></div>
						</a>
					</div>
					<!-- /PORTFOLIO ITEM -->
					<?php endwhile; ?>
					<?php else: ?>
					  
					<?php endif;?>

				</div>
				<!-- /PORTFOLIO -->
			</div>
			<!-- /PORTFOLIO-WRAPPER -->

			<?php echo get_footer(); ?>

	</body>
</html>
