<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MQD86L');</script>
<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
				<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fa-solid.min.css" >
				<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fa-brands.min.css" >
				<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fontawesome.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MQD86L"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
<div id="floatnav">
    <div class="nav-item nav1-link"><i class="fas fa-lightbulb"></i> <span>Giải pháp cho cha mẹ</span></div>
    <div class="nav-item nav2-link"><i class="fas fa-users"></i> <span>Đội Trainer</span></div>
    <div class="nav-item nav3-link"><i class="fas fa-comments"></i> <span>Góc cảm nhận</span></div>
</div>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->

						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php //html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
