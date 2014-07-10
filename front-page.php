<?php
	get_header();

	if ( have_posts() ) {
		while (have_posts()) :
			the_post();
			$class = '';
			if ( get_the_post_thumbnail() != '' ) {
				$class = ' notch';
				echo '<div id="featured-image">';
				the_post_thumbnail();
				echo '</div>';
			}
?>

<div id="main" class="clearfix">

	<div class="wrapper">

		<?php get_sidebar( 'left' ); ?>
		
		<article class="front-page<?php echo $class; ?>">
	<?php
			the_title('<h1>', '</h1>');
			the_content();
		endwhile;
	} else { ?>
<div id="main" class="clearfix">

		<?php get_sidebar( 'left' ); ?>

			<div class="intro clearfix">
				<div class="mission clearfix">
					<div class="mission-left">
						<h1>Mission of HRPO<br>and the IRB</h1>
						<p>Our mission is to protect the rights and welfare of part- icipants in “human research” as defined in 45 CFR 46.102(d) and (f) and “clinical inves- tigations” as defined in 21 CFR 50.3(c).</p>
					</div>
					<div class="mission-right">
						<img src="wp-content/themes/hrpo/_/img/accreditation.png">
					</div>
				</div>
				<div class="slider">
					<div class="bxwrapper">
					<ul class="bxslider">
						<?php
							$args = array( 'post_type' => 'slider' );
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post(); ?>
									<li>
										<?php 
											$image = get_field('image');
											$size = 'slider';
											if( $image ) {
												echo wp_get_attachment_image( $image, $size );
											}
										?>
										<div class="caption"><span><?php the_field('caption'); ?><?php if( get_field('link_url') ) : ?> <a href="<?php the_field('link_url'); ?>">MORE &raquo;</a><?php endif; ?></span></div>
									</li>
							<?php }
							} else {
							}
							wp_reset_postdata();
						?>
					</ul>
					</div>
				</div>
			</div>

		<div class="wrapper">
			<div class="tip-metrics">
			<div class="tip-week">
				<h1>Tip of the Week</h1>
				<p><?php
					$args = array( 'post_type' => 'tips', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						the_content();
					endwhile;
				?></p>
			</div>
			<div class="metrics clearfix">
				<div class="metrics-left">
					<h1>Metrics</h1>
					<p>Our office uses data collected from carefully defined performance metrics to measure results and ensure continuous quality improve-ment of our program. These metrics are also intended to provide a better understanding of the IRB process.</p>
				</div>
				<div class="metrics-right">
					<img src="wp-content/themes/hrpo/_/img/data-graphic.png">
					<p><a href="/about/metrics/">See HRPO data &raquo;</a></p>
				</div>
			</div>
			</div>
			<div class="events-home">
				<h1>Featured Deadlines &amp; Events</h1>
				<p class="events-all"><a href="calendar">See all dates &raquo;</a></p>
				<?php
	                $events = eo_get_events(array(
	                    'numberposts'=>4,
	                    'event_end_after'=>'today'
	                ));
	                if ($events) {
	                    echo '<ul>';
	                    foreach ($events as $event) {
	                        printf('<li class="calendar clearfix"><div class="calendar-date"><div class="calendar-month">%s</div><div class="calendar-day">%s</div></div><div class="event-info-single"><a href="%s"><div class="calendar-title">%s</div></a><div class="time">Time: %s - %s</div></div</li>',
	                            eo_get_the_start('M', $event->ID, null, $event->occurrence_id),
	                            eo_get_the_start('j', $event->ID, null, $event->occurrence_id),
	                             get_permalink($event->ID),
	                            get_the_title($event->ID),
	                            eo_get_the_start('g:ia', $event->ID, null, $event->occurrence_id),
	                            eo_get_the_end('g:ia', $event->ID, null, $event->occurrence_id)
	                        );
	                    };
	                    echo '</ul>';
	                } else { } ?>
			</div>


	<?php } ?>

	</div>

</div>

<script>
jQuery(document).ready(function(){
  jQuery('.bxwrapper').show();
  jQuery('.bxslider').bxSlider();
});
</script

<?php get_footer(); ?>