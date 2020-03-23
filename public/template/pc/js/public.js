$(function(){
	$('.tab_head ul li').click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		var index = $('.tab_head ul li').index($(this));
		$('.tab_content ul li.tab_content_li').eq(index).show().siblings().hide();
	});
	$('.tab_head1 ul li').hover(function(){
		$(this).addClass("active").siblings().removeClass("active");
		var index = $('.tab_head1 ul li').index($(this));
		$('.tab_content1 ul li.tab_content_li').eq(index).show().siblings().hide();
	});
	//遍历bn
	$(".swiper-wrapper-bn .swiper-slide").each(function(){
	    var bg = $(this).find(".bnimg").data("background");
	    $(this).find(".bnimg").css({"background":'url('+bg+')'})
	});
	
	var swiper = new Swiper('.swiper-container-bn', {
      navigation: {
        nextEl: '.swiper-button-next-bn',
        prevEl: '.swiper-button-prev-bn',
      },
      //effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      loop: true,
    });
    
    $('.scw1select_span').on('click',function(e){
		$(this).siblings(".scw1select_hide").slideToggle(200);
		e.stopPropagation();
	})
	$('body').on('click',function(){
	    $('.scw1select_hide').slideUp(200);
	})
	$(".scw1select_hide span").click(function(){
		var txt = $(this).html();
		$(this).parent(".scw1select_hide").siblings(".scw1select_span").find("em").html(txt);
	})
	
	$(".cxlbota").click(function(){
		$(this).toggleClass("cxlbota_active");
		$(this).siblings(".cxlbotw").slideToggle(150);
	})
	$(".cxrtwr a").click(function(){
		$(this).siblings("a").removeClass("active")
		$(this).addClass("active");
	})
	
	
	
})
