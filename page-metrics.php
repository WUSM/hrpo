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

	<div class="page-metrics wrapper clearfix">

		<?php get_sidebar( 'left' ); ?>

		<article<?php echo $class; ?>>
			<?php
					the_title('<h1>', '</h1>');
					the_content();
				endwhile;
			endif;
			?>

		<?php
			$args = array( 'post_type' => charts, 'charts_category' => 'workflow-data', 'posts_per_page' => 50 );
			$postslist = get_posts( $args ); ?>
			<?php if ($postslist) : ?>
			<h2>Workflow Data</h2>
			<ul class="charts clearfix">
			<?php foreach ( $postslist as $post ) :
			  setup_postdata( $post ); ?> 
				<li>
					<h3><?php the_title(); ?></h3> 
					<?php 
 						$image = get_field('image');
 						if( !empty($image) ):
							$url = $image['url'];
							$size = 'chart';
							$chart = $image['sizes'][ $size ]; ?>

							<a href="<?php echo $url; ?>">
								<img src="<?php echo $chart; ?>" />
							</a>
					<?php endif; ?>
				</li>
			<?php
			endforeach; 
			wp_reset_postdata();
			endif;
		?>
			</ul>
		<?php
			$args = array( 'post_type' => charts, 'charts_category' => 'submissions-data', 'posts_per_page' => 50 );
			$postslist = get_posts( $args ); ?>
			<?php if ($postslist) : ?>
			<h2>Submissions Data</h2>
			<ul class="charts">
			<?php foreach ( $postslist as $post ) :
			  setup_postdata( $post ); ?> 
				<li>
					<h3><?php the_title(); ?></h3> 
					<?php 
 						$image = get_field('image');
 						if( !empty($image) ):
							$url = $image['url'];
							$size = 'chart';
							$chart = $image['sizes'][ $size ]; ?>

							<a href="<?php echo $url; ?>">
								<img src="<?php echo $chart; ?>" />
							</a>
					<?php endif; ?>
				</li>
			<?php
			endforeach; 
			wp_reset_postdata();
			endif;
		?>
			</ul>
		<?php
			$args = array( 'post_type' => charts, 'charts_category' => 'swat', 'posts_per_page' => 50 );
			$postslist = get_posts( $args ); ?>
			<?php if ($postslist) : ?>
			<h2>SWAT Data</h2>
			<ul class="charts">
			<?php foreach ( $postslist as $post ) :
			  setup_postdata( $post ); ?> 
				<li>
					<h3><?php the_title(); ?></h3> 
					<?php 
 						$image = get_field('image');
 						if( !empty($image) ):
							$url = $image['url'];
							$size = 'chart';
							$chart = $image['sizes'][ $size ]; ?>

							<a href="<?php echo $url; ?>">
								<img src="<?php echo $chart; ?>" />
							</a>
					<?php endif; ?>
				</li>
			<?php
			endforeach; 
			wp_reset_postdata();
			endif;
		?>
			</ul>
		</article>

		<?php get_sidebar( 'right' ); ?>

	</div>

</div>

<script>
jQuery(document).ready(function(){
    jQuery('a').nivoLightbox();
});
</script>

<?php get_footer(); ?>