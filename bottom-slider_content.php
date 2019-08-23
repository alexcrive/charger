<?php 

$bottom_slider_quote = get_post_meta( get_the_ID(), 'quote', true);
$bottom_slider_author = get_post_meta( get_the_ID(), 'author', true);
$bottom_slider_car_type = get_post_meta( get_the_ID(), 'machine_type', true);
?>

<div class="testimonials__review">
	<div class="testimonials__comment">
		<?=$bottom_slider_quote?>
	</div>

	<div class="testimonials__author">
		<?=$bottom_slider_author?>
	</div>

	<div class="testimonials__car">
		<?=$bottom_slider_car_type?>
	</div>
</div>