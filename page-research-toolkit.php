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

	<div class="wrapper clearfix research-toolkit">

		<?php get_sidebar( 'left' ); ?>

		<article<?php echo $class; ?>>
			<?php
					the_title('<h1 id="page-title-rt">', '</h1>');
					the_content();
				endwhile;
			endif;
			?>
		</article>

		<ul class="research-toolkit-nav clearfix">
			<a href="/research-toolkit/policies/"><li class="rt-pol">Policies</li></a>
			<a href="/research-toolkit/investigator-guide/"><li class="rt-inv">Investigator Guide</li></a>
			<a href="/research-toolkit/fees/"><li class="rt-fee">Fees</li></a>
			<a href="/research-toolkit/emergency-patient-treatment/"><li class="rt-eme">Emergency Patient Treatment</li></a>
			<a href="/research-toolkit/cenr"><li class="rt-com">Community-Engaged Research (CEnR)</li></a>
			<a href="/research-toolkit/sponsor-letter-fwa/"><li class="rt-spo">Sponsor Letter</li></a>
			<a href="/research-toolkit/additional-resources/"><li class="rt-add">Additional Resources</li></a>
		</ul>

	</div>

</div>


<?php get_footer(); ?>