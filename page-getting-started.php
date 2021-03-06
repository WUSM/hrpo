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
					the_title('<h1 id="page-title-gs">', '</h1>');
					the_content();
				endwhile;
			endif;
			?>
		</article>

		<div class="getting-started">
		<div class="gs-left clearfix">
			<ul>
				<li class="gs-plan">
					<div class="gs-plan-box clearfix">
						<span class="gs-number">1</span><span class="gs-name">Plan</span>
					</div>
					<ul class="gs-links">
						<li><a href="step-1-plan/#partnership">Form <span class="together">Partnership &raquo;</span></a></li>
						<li><a href="step-1-plan/#funding">Identify <span class="together">Funding &raquo;</span></a></li>
						<li><a href="step-1-plan/#design">Design <span class="together">Study &raquo;</span></a></li>
						<li><a href="step-1-plan/#meet">Meeting with <span class="together">IRB &raquo;</span></a></li>
					</ul>
				</li>
				<div class="gs-arrow arrow-one"><img src="/wp-content/themes/hrpo/_/img/arrow.png"></div>
				<li class="gs-funding">
					<div class="gs-funding-box clearfix">
						<span class="gs-number">2</span><span class="gs-name">Funding</span>
					</div>
					<ul class="gs-links">
						<li><a href="step-2-funding/#form">Conflict of Interest <span class="together">Form &raquo;</span></a></li>
						<li><a href="step-2-funding/#letter">Letter of <span class="together">Intent &raquo;</span></a></li>
						<li><a href="step-2-funding/#memo">Memo of <span class="together">Understanding &raquo;</span></a></li>
						<li><a href="step-2-funding/#subaward">Subaward or <span class="together">Subcontract &raquo;</span></a></li>
					</ul>
				</li>
				<div class="gs-arrow arrow-two"><img src="/wp-content/themes/hrpo/_/img/arrow.png"></div>
			</ul>
		</div>

		<div class="gs-right clearfix">
			<ul>
				<li class="gs-assurances">
					<div class="gs-assurances-box clearfix">
						<span class="gs-number">3</span><span class="gs-name">Assurances</span>
					</div>
					<ul class="gs-links">
						<li><a href="step-3-assurances/#authorization">IRB Authorization <span class="together">Agreement &raquo;</span></a></li>
						<li><a href="step-3-assurances/#agreements">Federal Wide Assurance &amp; Individual Investigator <span class="together">Agreements &raquo;</span></a></li>
						<li><a href="step-3-assurances/#education">Human Subject <span class="together">Education &raquo;</span></a></li>
						<li><a href="../community-partners/">Community Partner Education <span class="together">Policy &raquo;</span></a></li>
						<li><a href="../community-partners/">Community Partner <span class="together">Manual &raquo;</span></a></li>
					</ul>
				</li>
				<div class="gs-arrow arrow-three"><img src="/wp-content/themes/hrpo/_/img/arrow.png"></div>
				<li class="gs-approvals">
					<div class="gs-approvals-box clearfix">
						<span class="gs-number">4</span><span class="gs-name">Approvals</span>
					</div>
					<ul class="gs-links">
						<li><a href="step-4-approvals/#approval">Study <span class="together">Approval &raquo;</span></a></li>
						<li><a href="step-4-approvals/#modifications"><span class="together">Modifications &raquo;</span></a></li>
						<li><a href="step-4-approvals/#problems">Unanticipated <span class="together">Problems &raquo;</span></a></li>
						<li><a href="step-4-approvals/#renewals"><span class="together">Renewals &raquo;</span></a></li>
						<li><a href="step-4-approvals/#assistance">General <span class="together">Assistance &raquo;</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
		</div>

	</div>

</div>


<?php get_footer(); ?>