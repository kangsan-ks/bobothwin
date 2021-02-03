function page(page){
	var f = document.search_form;
	f.page.value = page;
	f.submit();
}

$(function(){
    var mySwiper = new Swiper('.swiper-container', {
		// Optional parameters
		direction: 'horizontal',
		loop: true,
	  
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		  clickable:true
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		  },
	});
	$('.header_inner .main_menu li').hover(function(){
		$(this).find('.sub_menu').fadeIn();
	},function(){
		$(this).find('.sub_menu').hide();
	});

	$('#header .header_inner > .img_box').click(function(){
		$(this).siblings('.respon_menu').addClass('active');
	});
	$('#header .header_inner .respon_menu .close_btn').click(function(){
		$(this).parent().parent('.respon_menu').hide();
	});

	$('#header .header_inner .respon_menu .menu_box > li').click(function(){
		$(this).find('ul').slideToggle();
		// $(this).parent().siblings().hide();
	});

});
