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
					the_title('<h1>', '</h1>');
					the_content();
				endwhile;
			endif;

			$args = array( 'posts_per_page' => 10 );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<div><?php the_time( 'm/d/Y' ); ?></div>
					<?php the_excerpt(); ?>
			<?php endforeach; 
			wp_reset_postdata();?>

		</article>

		<?php get_sidebar( 'right' ); ?>

	</div>

</div>

<?php get_footer(); ?>