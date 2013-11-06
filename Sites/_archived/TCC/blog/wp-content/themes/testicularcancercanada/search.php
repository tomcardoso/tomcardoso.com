<?php get_header(); ?>


	<div class="container">
	<div class="container-inner">
		<?php include (TEMPLATEPATH . '/inc/topbar.php' ); ?>

		<div class="row">
			<div class="span10 offset1">
				<div class="container-search">
				
	<?php if (have_posts()) : ?>
	

				<h2 class="search-title">Search Results</h2>
				<hr>
		
				<?php while (have_posts()) : the_post(); ?>
		
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
						<h2 class="search-title-secondary"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
		
						<div class="entry">
		
							<?php the_excerpt(); ?>
		
						</div>
		
					</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="notfound-search">D&rsquo;oh! <br />No posts found.</h2>

	<?php endif; ?>

				</div> <!-- /CONTAINER-SEARCH -->
			</div> <!-- /SPAN -->
		</div> <!-- /ROW -->
	</div> <!-- /CONTAINER-INNER -->
	</div> <!-- /CONTAINER -->

<?php get_footer(); ?>
