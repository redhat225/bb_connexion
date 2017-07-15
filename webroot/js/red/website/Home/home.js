$(document).ready(function(){
      //activated sidenav
       $(".button-collapse").sideNav();
       $('#trigger-subscriber-meeting,#trigger-subscriber,#side-nav-triger-event, .trigger-subscriber-modal').on('click',function(){
          $('#modal-closed-subscription').openModal({
          });
       });

	  new WOW().init();

	   $('select').material_select();


	   $('.multiple-items').slick({
	   	 arrows: false,
	   	   dots: true,
		  infinite: true,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  autoplay: true,
          autoplaySpeed: 2000
		});

	   $('.trigger-close-bottom-modal').on('click', function(){
			$('.bottom-stand-content').slideUp();
			$('.bottom-stand-content').addClass('closed');

	   });
});

	$(window).scroll(function(){
		if($(this).scrollTop() > 800 ){
			if(!$('.bottom-stand-content').hasClass('closed'))
			$('.bottom-stand-content').slideDown();

			$('#main-wrapper-navbar').addClass('navbar-fixed');
			$('.redirect-top').slideDown();
		}	
		else{
			$('.bottom-stand-content').slideUp();
			$('#main-wrapper-navbar').removeClass('navbar-fixed');
			$('.redirect-top').slideUp();

		}
			
	});







	