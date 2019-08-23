<?php

get_header();
?>

	<!-- main-screen -->
	<section class="main-screen" style="background-image: url(<?php the_field('top_slider_bg', '38'); ?>);">
		<div class="main-screen__slider">
			<div class="owl-carousel owl-theme-top">
				<?php
					global $post;
						$args = array(
								'post_type' => 'slogan',
								'publish' => true
						);
						$top_slider_posts = get_posts( $args );
						foreach( $top_slider_posts as $post ) {
							include(get_template_directory() . 
								'/top-slider_content.php');
						}
					wp_reset_postdata();
					?>
			</div>
		</div>
		
		<div class="main-screen__footer">
				<ul class="main-screen__footer__social-network">
				<li class="main-screen__footer__social-network__item">
					<a href="<?php the_field('facebook', '38'); ?>" class="main-screen__footer__social-network__item__link">Facebook</a>
				</li>
				
				<li class="main-screen__footer__social-network__item">
					<a href="<?php the_field('twitter', '38'); ?>" class="main-screen__footer__social-network__item__link">Twitter</a>
				</li>
				
				<li class="main-screen__footer__social-network__item">
					<a href="<?php the_field('youtube', '38'); ?>" class="main-screen__footer__social-network__item__link">Youtube</a>
				</li>
			</ul>
			<div class="zero">0</div>
			<div class="slide-number">
			</div>
			<div class="main-screen__footer__line"></div>
			<div class="slide-lenght">
			</div>

			<a href="#footer" class="main-screen__footer__scroll">
				Scroll down
			</a>
		</div>
	</section>
	<!-- end main-screen -->

	<!-- about-us -->
	<section class="about-us" id="about-us">
		<div class="about-us__img">
			<img src="<?php the_field('about-us__img', '38'); ?>" alt="">
		</div>
		<div class="about-us__info">
			<div class="big-title">
				About us
			</div>

			<div class="big-description big-description--black">
				<?php the_field('about-us__description', '38'); ?>
			</div>

			<a href="#" class="more-button">More</a>
		</div>
		<div class="sidebar-letter">A</div>
		<div class="sidebar-text">
			Who We Are
		</div>
	</section>
	<!-- end about-us -->
	
	<!-- services  -->
	<section class="services" id="services">
		<div class="services-wrap">
			<div class="big-title big-title--white services__big-title">
				Services
			</div>
			<a href="#" class="read-more-button services__read-more-button">
				learn More
			</a>
		</div>
		
		<div class="services__item">
			<div class="services__item__wrap">
				<div class="services__item__card">
				<div class="services__item__card__title">
					Tuning
				</div>
				<div class="services__item__card__description">
					Modification of the performance or appearance of a vehicle.
				</div>
				<a href="#" class="read-more-button services__item__card__read-more-button">
					read more
				</a>
				</div>
			</div>
			<div class="services__item__wrap services__item__2">
				<div class="services__item__card">
				<div class="services__item__card__title">
					Restoration
				</div>
				<div class="services__item__card__description">
					Modification of the performance or appearance of a vehicle.
				</div>
				<a href="#" class="read-more-button services__item__card__read-more-button">
					read more
				</a>
				</div>
			</div>
			<div class="services__item__wrap services__item__3">
				<div class="services__item__card">
				<div class="services__item__card__title">
					Repairs
				</div>
				<div class="services__item__card__description">
					Modification of the performance or appearance of a vehicle.
				</div>
				<a href="#" class="read-more-button services__item__card__read-more-button">
					read more
				</a>
				</div>
			</div>
			
		</div>
		<div class="sidebar-letter services__sidebar-letter">S</div>
		<div class="sidebar-text services__sidebar-text">
			Cars & Details
		</div>
	</section>
	<!-- end services  -->
	
	<section class="behind-card">	
	</section>

	<!-- projects  -->
	<section class="projects" id="projects">
		<div class="big-title projects__big-title">
			Projects
		</div>
		
		<div class="projects__gallery">
			<div class="projects__gallery__row">
				<div class="projects__gallery__row__item">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/chad-kirchoff-202731.png" alt="chad">
				</div>
				<div class="projects__gallery__row__item">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/paul-bence-310970.png" alt="paul">
				</div>
				<div class="projects__gallery__row__item__big">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/pietro-de-grandi-254800.png" alt="pietro">
				</div>
				<div class="projects__gallery__row__item">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/pexels-photo-204605.png" alt="pexels">
				</div>
			</div>

			<div class="projects__gallery__row last-row">
				<div class="projects__gallery__row__item second-row small-pic">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/peter-kisteman-229911.png" alt="peter">
				</div>
				<div class="projects__gallery__row__item second-row">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/389488_shevrole_kamaro_krasnyj_muskul-kar_Chevrolet_5184x3456_www.Gde-Fon.com.png" alt="kamaro">
				</div>
				<div class="projects__gallery__row__item__big second-row ">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/photo_2017-10-26_23-39-16.png" alt="auto">
				</div>
				<div class="projects__gallery__row__item second-row">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/Ford-GT-1.png" alt="ford">
				</div>
				<div class="projects__gallery__row__item second-row">
					<img src="<?php echo get_template_directory_uri()?>/img/pj/wallpaper.wiki-1970-Dodge-Charger-HD-Wallpaper-PIC-WPD0014651.png" alt="charger">
				</div>
			</div>
			<div class="projects__button">
				<a href="#" class="more-button">more</a>
			</div>
			
		</div>
		<div class="sidebar-letter projects__sidebar-letter">P</div>
		<div class="sidebar-text projects__sidebar-text">
			Our Portfolio
		</div>
	</section>
	<!-- end projects  -->
	
	<!-- testimonials  -->
	<section class="testimonials">
		<div class="sidebar-letter testimonials__sidebar-letter">T</div>
		<div class="sidebar-text testimonials__sidebar-text">Happy Clients</div>
		
		<div class="testimonials__slider">
			<div class="owl-carousel owl-theme-bottom">
				<?php
					global $post;
						$args = array(
								'post_type' => 'testimonials_review',
								'publish' => true
						);
						$bottom_slider_posts = get_posts( $args );
						foreach( $bottom_slider_posts as $post ) {
							include(get_template_directory() . 
								'/bottom-slider_content.php');
						}
					wp_reset_postdata();
				?>
			</div>	

		</div>
	</section>
	<!-- end testimonials  -->
	
	<!-- blog  -->
	<section class="charger-blog">
		<div class="charger-blog__img">
			<img src="<?php echo get_template_directory_uri()?>/img/bg/blog.png" alt="garage">
		</div>
		<div class="charger-blog__info">
			<div class="big-title">
				Charger
			</div>

			<div class="big-description blog--big-description">
				<span class="charger-blog__letter">T</span>he Charger Customs® has grown into one of  the most powerful and brand names in the  custom automotive industry. We now have franchises stretching across the world. We have worked with some of the largest brands in the world, including Fortune 500 companies. We are now a household name in multiple countries and plan to continue dominating the custom car world and expand our global reach with amazing rides and concepts.
			</div>

			<a href="#" class="more-button">More</a>
		</div>

		<div class="sidebar-letter blog__sidebar-letter">C</div>
		<div class="sidebar-text">
			Charger Customs
		</div>
	</section>
	<!-- end blog  -->


<?php
get_footer();
