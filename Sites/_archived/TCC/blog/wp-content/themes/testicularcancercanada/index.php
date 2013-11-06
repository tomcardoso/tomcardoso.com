<?php get_header(); ?>

<div class="container">
	<div class="container-inner">

		<?php include (TEMPLATEPATH . '/inc/topbar.php' ); ?>

		<div class="row">
			<div class="span10 offset1">			
				<div class="container-index">	

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">			
							<h2 class="index-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>			
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>			
							<div class="entry">
							<?php the_content(); ?>
							</div>
						</div>
					<hr>						
					<?php endwhile; ?>

				</div>
<?php else : ?>

	<h2 class="center">Not Found</h2>

<?php endif; ?>

			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>
