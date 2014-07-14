<?php

	get_header();

	if (have_posts()) :
		while (have_posts()) :
			the_post();
?>

<div id="main" class="clearfix">

	<div class="single-news wrapper clearfix">

		<?php get_sidebar( 'left' ); ?>

		<article>
			<a class="back-to-news" href="/news">&larr; Back to HRPO News</a>
			<?php
					the_title('<h1>', '</h1>'); ?>
					<div class="post-date"><?php the_time( 'm/d/Y' ); ?></div>
					<?php if (get_the_post_thumbnail() != '') {
						echo '<div id="featured-image">';
						the_post_thumbnail();
						echo '</div>';
					}
					the_content();
				endwhile;
			endif; ?>

		</article>

		<?php get_sidebar( 'right' ); ?>

	</div>

</div>

<?php get_footer(); ?>