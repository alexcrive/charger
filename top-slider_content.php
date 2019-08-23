<?php 

$top_slider_title = get_post_meta( get_the_ID(), 'title', true);
$top_slider_description = get_post_meta( get_the_ID(), 'description', true);
?>
	<!-- Вывод картинки
	<?php 
		//echo get_the_post_thumbnail( get_the_ID(), 'slider-img');
		//get_the_post_thumbnail( get_the_ID(), название превью в функциях);
	 ?>  --> 
<div class="main-screen__slider__item">
	<div class="main-screen__slider__item__title">
		<?=$top_slider_title?>
	</div>
	<div class="big-description">
		<?=$top_slider_description?>
	</div>
		<a href="#" class="read-more-button">
			read More
		</a>
</div>