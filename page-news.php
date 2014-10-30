<?php

	get_header();

	if (have_posts()) :
		while (have_posts()) :
			the_post();
			$class = '';
			if (get_the_post_thumbnail() != '') {
				$class = ' class="notch"';
				echo '<div id="featured-image">';
				the_post_thumbnail();
				echo '</div>';
			}
?>

<div id="main" class="clearfix">

	<div class="page-news wrapper clearfix">

		<?php get_sidebar( 'left' ); ?>

		<article<?php echo $class; ?>>
			<?php
					the_title('<h1 id="page-title">', '</h1>');
					the_content();
				endwhile;
			endif;
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$args = array( 'post_type' => 'post', 'paged' => $paged, 'posts_per_page' => 10 );
			query_posts( $args );
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="clearfix">
					<?php if (get_the_post_thumbnail() != '') {
						echo '<div id="featured-image">';
						the_post_thumbnail('thumbnail');
						echo '</div>';
						echo '<div class="post-preview-thumbnail">';
					} else {
						echo '<div class="post-preview">';
					} ?>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<div class="post-date"><?php the_time( 'm/d/Y' ); ?></div>
						<?php the_excerpt(); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="post-navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;') ?></div>
			</div>
			<?php else : ?>
			<p class="no-return">No articles to display at this time.</p>
			<?php endif; ?>

		</article>

	</div>

</div>

<?php get_footer(); ?>