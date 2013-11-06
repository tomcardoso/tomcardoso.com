<?php get_header(); ?>

	<div class="container">
	<div class="container-inner">
		<?php include (TEMPLATEPATH . '/inc/topbar.php' ); ?>

		<div class="row">
			<div class="span10 offset1">
				<div class="container-category">

					<?php if (have_posts()) : ?>

				<h2 class="category-title"><?php single_cat_title(); ?></h2>
				<hr>
		
				<?php while (have_posts()) : the_post(); ?>
		
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
						<h2 class="category-title-secondary"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
		
						<div class="entry">
		
							<?php the_excerpt(); ?>
		
						</div>
		
					</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="notfound-category">D&rsquo;oh! <br />No posts found.</h2>

	<?php endif; ?>

				</div> <!-- /CONTAINER-SEARCH -->
			</div> <!-- /SPAN -->
		</div> <!-- /ROW -->
	</div> <!-- /CONTAINER-INNER -->
	</div> <!-- /CONTAINER -->

<?php get_footer(); ?>
