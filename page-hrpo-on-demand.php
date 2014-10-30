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

	<div class="title-bg"></div>
	<div class="title-bg-inner"></div>

	<div class="wrapper clearfix">

		<?php get_sidebar( 'left' ); ?>

		<article<?php echo $class; ?>>
			<?php
					the_title('<h1 id="page-title-rt">', '</h1>');
					the_content();
				endwhile;
			endif; ?>

		<?php if( have_rows('topic') ):
		    while ( have_rows('topic') ) : the_row(); ?>
		        <div class="accordion-header"><?php the_sub_field('title'); ?></div>
		        <div class="accordion-body-text">
	        		<p><?php the_sub_field('description'); ?></p>
	        		<?php if(get_sub_field('email_link')): ?>
	        			<p><a href="mailto:<?php the_sub_field('email_link'); ?>">Send email to register</a></p>
	        		<?php endif; ?>
		        </div>
			<?php endwhile;
			endif; ?>

		</article>
	</div>

</div>

<script type="text/javascript">
	jQuery('.topic-content').hide();
</script>

<?php get_footer(); ?>