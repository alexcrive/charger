$(document).ready(function(){
	  $('.owl-theme-top').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    if (!e.namespace)  {
      return;
    }
    let carousel = e.relatedTarget;
    if(carousel.relative(carousel.current()) < 9) {
    	$('.zero').show();
    } else {
      $('.zero').hide();
    }
    $('.slide-number').text(carousel.relative(carousel.current()) + 1);
    $('.slide-lenght').text(carousel.items().length);
  }).owlCarousel({
	    loop:true,
	    margin:10,
	    navText: ['PREV','NEXT'],
	    nav:true,
	    items:1, 
	    startPosition: 0
	});

$('.owl-theme-bottom').owlCarousel({
    nav:true,
    loop: true,
    items:1,
    dots: false,
    navText: ["<img src='img/slider-nav/prev.png'>","<img src='img/slider-nav/next.png'>"]
});

$(".mobile-menu").click(function(){
    $(".mobile-menu").hide();
    window.scrollTo(0, 0);
    $(".header__nav").show();
});

$(".header__nav__item__link").click(function(e){
    event.preventDefault();
    $(".header__nav").hide();
    $(".mobile-menu").show();
})

});


