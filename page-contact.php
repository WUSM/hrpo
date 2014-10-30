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

	<div class="wrapper clearfix contact-page">

		<?php get_sidebar( 'left' ); ?>

		<article<?php echo $class; ?>>
			<?php
					the_title('<h1 id="page-title-rt">', '</h1>');
					the_content();
				endwhile;
			endif; ?>

		<div class="contact">

		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Alphabetical Staff Listing</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'hrpo-directors', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">HRPO Directors</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'irb-chairs', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">IRB Chairs</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'business-office', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Business Office</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'managers', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Managers</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'myirb', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">myIRB</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'expedited-team', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Expedited Team</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'full-board-team', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Full Board Team</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'education-team', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Education Team</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'project-team', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Project Team</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $args = array( 'post_type' => staff, 'orderby' => 'title', 'order' => 'ASC', 'staff_category' => 'coodinators', 'posts_per_page' => 150 );
		$postslist = get_posts( $args ); ?>
		<?php if ($postslist) : ?>
		<div class="accordion-header">Coordinators</div>
		<div class="accordion-body-text">
		<?php foreach ( $postslist as $post ) :
		  	setup_postdata( $post ); ?> 
		  	<div class="clearfix">
	        	<div class="name"><?php the_title(); ?></div>
	        	<div class="title"><?php the_field('title'); ?></div>
	        	<div class="phone"><?php the_field('phone'); ?></div>
	        	<div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
	        </div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		</div>
	</article>
	</div>

</div>

<script type="text/javascript">
	jQuery('.topic-content').hide();
</script>

<?php get_footer(); ?>