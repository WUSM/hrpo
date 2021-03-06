<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>	 <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>	 <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>	 <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="sitename-wustl-edu" data-template-set="html5-reset">
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?> | <?php echo is_front_page() ? 'Washington University School of Medicine in St. Louis' : bloginfo('name'); ?></title>

    <meta name="title" content="<?php is_front_page() ? bloginfo('name') : wp_title(''); ?> | <?php is_front_page() ? 'Washington University School of Medicine in St. Louis' : bloginfo('name'); ?>">
    <meta name="author" content="Washington University School of Medicine in St. Louis">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/_/img/apple-touch-icon.png">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,600' rel='stylesheet' type='text/css'>

    <!-- concatenate and minify for production -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <!--[if gte IE 9]>
    <style type="text/css">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

    <div id="header-logo-row" class="clearfix">

        <div class="wrapper clearfix">

            <div id="header-logo"><a onclick="javascript:_gaq.push(['_trackEvent','header-logo','http://wustl.edu/']);" href="http://wustl.edu/"><img src="<?php echo get_template_directory_uri(); ?>/_/img/wustl-logo.png" alt="Washington University School of Medicine in St. Louis"></a></div>

            <div id="header-text">
                <a onclick="javascript:_gaq.push(['_trackEvent','header-text','http://medicine.wustl.edu/']);" href="http://wustl.edu/">Washington University in St. Louis</a>
            </div>

        </div>

    </div>

    <div id="header-site-row" class="clearfix">
        <div class="wrapper clearfix">
            <div id="mobile-menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/_/img/mobile-menu-icon.png"></div>
            <?php get_search_form(); ?>
            <div id="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
        </div>
    </div>

    <?php wp_nav_menu( array(
        'theme_location' => 'header-menu',
        'menu'           => 'header',
        'container'      => 'nav',
        'container_id'   => 'main-nav',
        'items_wrap'     => '<div class="wrapper"><ul>%3$s</ul></div>',
    ) ); ?>

</header>

<?php
// Required for mobile nav on Event Organiser search results page.
// I'd prefer to have this in the WUSM Event Organiser Skin plugin.
if (isset($_GET['post_type']) && $_GET['post_type'] == 'event' && is_search()) {
?>
<div id="main" class="clearfix">
    <div class="wrapper">
        <?php get_sidebar( 'left' ); ?>
<?php
}
?>