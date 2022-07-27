<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Adobe Font -->
		<link rel="stylesheet" href="https://use.typekit.net/ayl7npt.css">
		<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,800;1,400&family=Nunito+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet"> -->
		
		<?php wp_head(); ?>
        <!-- analytics -->
        <!-- Google Tag Manager -->
		
		<!-- End Google Tag Manager -->
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		
		<!-- End Google Tag Manager (noscript) -->
		<!-- wrapper -->
		<div id="topNav" class="fixer at-top">
			<div class="row full-width-row">
				<div class="col-xs-12">
					<div class="mobile-header">
						<div class="mobile--left">
							<a class="logo" href="/" class="rel">
								<?php echo wp_get_attachment_image(get_field('navigation_logo', 'options')['id'], 'full', null, ['class' => 'logo']); ?>
							</a>
						</div>
						<div class="mobile--right">
							<a href="#" class="rewards">
								<div class="title">Earn<br />Rewards</div>
								<div class="icon">
									<svg width="52px" height="54px" viewBox="0 0 52 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									    <title>ICON/MOBILE</title>
									    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        <g id="Modules-/-Desktop-/-Navigation" transform="translate(-1310.000000, -61.000000)">
									            <g id="Group" transform="translate(1271.000000, 0.000000)">
									                <g transform="translate(39.000000, 61.363636)" id="ICON/MOBILE">
									                    <g id="Group-3" fill="#FFCD00">
									                        <ellipse id="Oval" cx="26" cy="26.5909091" rx="26" ry="26.5909091"></ellipse>
									                    </g>
									                    <g id="icons/fontawesome/regular/mobile-notch" fill="#FFFFFF">
									                        <path d="M28.4375,34.0696023 L23.5625,34.0696023 C23.115625,34.0696023 22.75,34.443537 22.75,34.9005683 C22.75,35.3575995 23.1137968,35.7315342 23.5625,35.7315342 L28.4375,35.7315342 C28.8863047,35.7315342 29.25,35.3594692 29.25,34.9005683 C29.25,34.4416673 28.884375,34.0696023 28.4375,34.0696023 Z M31.6875001,13.2954544 L20.3124999,13.2954544 C18.5173827,13.2954544 17.0624999,14.7834028 17.0624999,16.6193181 L17.0624999,36.5625001 C17.0624999,38.3984154 18.5173827,39.8863638 20.3124999,39.8863638 L31.6875001,39.8863638 C33.4826173,39.8863638 34.9375001,38.3984154 34.9375001,36.5625001 L34.9375001,16.6193181 C34.9375001,14.7834028 33.4800782,13.2954544 31.6875001,13.2954544 Z M32.4999999,36.5625001 C32.4999999,37.0206739 32.1354922,37.393466 31.6875001,37.393466 L20.3124999,37.393466 C19.8646093,37.393466 19.4999999,37.0195314 19.4999999,36.5625001 L19.4999999,16.6193181 C19.4999999,16.1611442 19.8645078,15.7883522 20.3124999,15.7883522 L22.75,15.7883522 L22.75,17.450284 C22.75,17.9093927 23.115625,18.2812499 23.5625,18.2812499 L28.4375,18.2812499 C28.884375,18.2812499 29.25,17.9093927 29.25,17.450284 L29.25,15.7883522 L31.6875001,15.7883522 C32.1343751,15.7883522 32.4999999,16.1612481 32.4999999,16.6193181 L32.4999999,36.5625001 Z"></path>
									                    </g>
									                </g>
									            </g>
									        </g>
									    </g>
									</svg>
								</div>
							</a>
							<button class="burger hamburger hamburger--3dx" type="button">
							  <span class="hamburger-box">
							    <span class="hamburger-inner"></span>
							  </span>
							</button>
						</div>
					</div>
					<!-- header -->
					<div class="desktop-header">
						<header role="banner">
							<div class="header__wrap">
								<div class="header--left">
									<div class="header__inner header__logo">
										<a class="logo" href="/" class="rel">
											<?php echo wp_get_attachment_image(get_field('navigation_logo', 'options')['id'], 'full', null, ['class' => 'logo']); ?>
										</a>
									</div>
									<div class="header__inner header__nav">
										<nav class="nav"><?php echo wp_nav_menu(array(
												'menu' => 'Main Menu'
											)); ?></nav>
										<div class="mobile-search">
											 <?php get_search_form(); ?> 
										</div>
									</div>
								</div>
								<div class="header--right">
									<div class="header__inner">
										<div>
											 <?php get_search_form(); ?> 
										</div>
									</div>
									<div class="header__inner">
										<a href="#" class="rewards">
											<div class="title">Earn<br />Rewards</div>
											<div class="icon">
												<svg width="52px" height="54px" viewBox="0 0 52 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												    <title>ICON/MOBILE</title>
												    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												        <g id="Modules-/-Desktop-/-Navigation" transform="translate(-1310.000000, -61.000000)">
												            <g id="Group" transform="translate(1271.000000, 0.000000)">
												                <g transform="translate(39.000000, 61.363636)" id="ICON/MOBILE">
												                    <g id="Group-3" fill="#FFCD00">
												                        <ellipse id="Oval" cx="26" cy="26.5909091" rx="26" ry="26.5909091"></ellipse>
												                    </g>
												                    <g id="icons/fontawesome/regular/mobile-notch" fill="#FFFFFF">
												                        <path d="M28.4375,34.0696023 L23.5625,34.0696023 C23.115625,34.0696023 22.75,34.443537 22.75,34.9005683 C22.75,35.3575995 23.1137968,35.7315342 23.5625,35.7315342 L28.4375,35.7315342 C28.8863047,35.7315342 29.25,35.3594692 29.25,34.9005683 C29.25,34.4416673 28.884375,34.0696023 28.4375,34.0696023 Z M31.6875001,13.2954544 L20.3124999,13.2954544 C18.5173827,13.2954544 17.0624999,14.7834028 17.0624999,16.6193181 L17.0624999,36.5625001 C17.0624999,38.3984154 18.5173827,39.8863638 20.3124999,39.8863638 L31.6875001,39.8863638 C33.4826173,39.8863638 34.9375001,38.3984154 34.9375001,36.5625001 L34.9375001,16.6193181 C34.9375001,14.7834028 33.4800782,13.2954544 31.6875001,13.2954544 Z M32.4999999,36.5625001 C32.4999999,37.0206739 32.1354922,37.393466 31.6875001,37.393466 L20.3124999,37.393466 C19.8646093,37.393466 19.4999999,37.0195314 19.4999999,36.5625001 L19.4999999,16.6193181 C19.4999999,16.1611442 19.8645078,15.7883522 20.3124999,15.7883522 L22.75,15.7883522 L22.75,17.450284 C22.75,17.9093927 23.115625,18.2812499 23.5625,18.2812499 L28.4375,18.2812499 C28.884375,18.2812499 29.25,17.9093927 29.25,17.450284 L29.25,15.7883522 L31.6875001,15.7883522 C32.1343751,15.7883522 32.4999999,16.1612481 32.4999999,16.6193181 L32.4999999,36.5625001 Z"></path>
												                    </g>
												                </g>
												            </g>
												        </g>
												    </g>
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>
						</header>
					</div>
				</div>
			</div>
		</div>
		<!-- /header -->
