<?php echo get_header();?>


			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- BLOG -->
					<div class="blog shuffle" style="position: relative; height: 1010px; transition: height 250ms ease-out 0s;">
						<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
						<!-- POST -->
						<div class="post col-md-9 col-sm-12 shuffle-item filtered text-center" style="position: absolute; top: 0px; left: 0px; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); visibility: visible; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
							<?php echo the_content();?>
						</div>	
						<!-- /POST -->

									
						<!-- SIDER -->
						<div class="pull-right col-md-3 text-center hidden-xs">
							<h6>-<?php echo the_title(); ?>-</h6>
							<div class="post-content ">
								<p class="date">最后更新：<?php echo the_date(); ?></p>
								<p class="date"><?php echo the_tags(); ?></p>
								<p class="date"><?php //echo var_dump(get_the_category()); ?></p>
								<p class="date"><?php //echo get_the_category()->cat_ID; ?></p>

							</div>
						<?php endwhile; ?>
						<?php else: ?>
					  
						<?php endif;?>
													
							
						</div>
						

						
						<!-- /SIDER -->									

					</div>
					<!-- /BLOG -->

				</div>
				<!-- /ROW -->
			</div>
			
			<?php echo get_footer(); ?>

	</body>
</html>
