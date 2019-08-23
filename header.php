
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<!-- header -->
	<header class="header" id="top">
			<div class="logo" style="background-image: url(<?php the_field('logo', '38'); ?>">
				
			</div>
			<div class="mobile-menu">
				menu
			</div>
			<nav>
				<ul class="header__nav">
					<li class="header__nav__item">
						<a href="#about-us" class="header__nav__item__link">
							about us
						</a>
					</li>

					<li class="header__nav__item">
						<a href="#services" class="header__nav__item__link">
							Services
						</a>
					</li>

					<li class="header__nav__item">
						<a href="#projects" class="header__nav__item__link">
							projects
						</a>
					</li>
				</ul>
			</nav>
	</header>
<!-- end header -->