<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
		<div class="container">
			<div class="container-inner">
				<?php include (TEMPLATEPATH . '/inc/topbar.php' ); ?>

				<div class="row">
					<div class="span10 offset1">
						<div class="container-single">					
							<h2 class="single-title"><?php the_title(); ?></h2>
							<hr>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							<div class="entry">
								<?php the_content(); ?>
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								<?php the_tags( 'Tags: ', ', ', ''); ?>			
							</div>
							<hr>		
							<div class="meta-spacer"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></div>				
							<?php comments_template(); ?>
						</div> <!-- /container-single -->
						
					</div> <!-- /span -->
				</div> <!-- /row -->	
			</div> <!-- /container-inner -->
		</div> <!-- /container -->			
			
	</div>



<?php endwhile; endif; ?>

<?php get_footer(); ?>