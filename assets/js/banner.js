
$(window).bind("load resize",function(){
    cehu();
 });

function cehu(){
	var wid_q = $(window).width();
	var ban_li = $('.py-banner').children('.uk-position-relative').children('ul').children('li');
	var ban_li2 = $('.py-banner').children('.py-banner-thumbnav').children('ul').children('li');
	var ban_le = $('.py-banner').children('.uk-position-relative').children('.uk-position-center-left');
	var ban_rig = $('.py-banner').children('.uk-position-relative').children('.uk-position-center-right');
	
	var s = ban_li.is('.uk-active');
	if(s == false){
		ban_li.eq(0).addClass('uk-active uk-transition-active');
		ban_li.eq(0).children().eq(0).children().addClass('papaya-lazy-load uk-cover load-ready');
		ban_li.eq(0).children().eq(0).children().css({'height':parseInt(wid_q/0.6673),'width':wid_q});
		
		ban_le.addClass('uk-icon uk-slidenav-previous uk-slidenav');
		ban_le.html('<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg>');
		ban_rig.addClass('uk-icon uk-slidenav-next uk-slidenav');
		ban_rig.html('<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg>');	
		ban_li2.eq(0).addClass('uk-active');	
		var m = ban_li2.length;
		for(var i = 0;i<m;i++){
			ban_li2.eq(i).children('a').css('background-image','url("'+ban_li2.eq(i).children('a').attr('data-src')+'")');
		}
		
	}else{
		$('.py-banner').children('.uk-position-relative').children('ul').children('.uk-active').children().eq(0).children().css({'height':parseInt(wid_q/0.6673),'width':wid_q});
	}
	

	if(wid_q > 640){
		$('.py-banner').children('.uk-slideshow-nav').html('');

	}else if(wid_q < 640){
		var m = ban_li2.length;
		var hh = '';
		for(var i = 0;i<m;i++){
			if(s == false){
				if(i == 0){
					hh += '<li class="uk-active"><a></a></li>';
				}else{
					hh += '<li><a></a></li>';
				}
			}else{
				var ou = $('.py-banner').children('.uk-position-relative').children('ul').children('.uk-active').index();
				if(i == ou){
					hh += '<li class="uk-active"><a></a></li>';
				}else{
					hh += '<li><a></a></li>';
				}
			}
		}
		$('.py-banner').children('.uk-slideshow-nav').html(hh);
	}else{
		var m = ban_li2.length;
		var hh = '';
		for(var i = 0;i<m;i++){
			if(s == false){
				if(i == 0){
					hh += '<li class="uk-active"><a></a></li>';
				}else{
					hh += '<li><a></a></li>';
				}
			}else{
				var ou = $('.py-banner').children('.uk-position-relative').children('ul').children('.uk-active').index();
				if(i == ou){
					hh += '<li class="uk-active"><a></a></li>';
				}else{
					hh += '<li><a></a></li>';
				}
			}
		}
		$('.py-banner').children('.uk-slideshow-nav').html(hh);
	}

	
}
function showLogin(){
	
	$('.uk-position-center-left').trigger("click");
}
setInterval("showLogin()","5000");

$(document).on("click",'.uk-thumbnav li,.uk-slideshow-nav li',function(e){
	var img_vc = $(this).parent().children('.uk-active').index();
	var img_num = $(this).index();
	var wid_q = $(window).width(); 
	var pd = $(this).is('.uk-active');
	if(pd == false){
		$(this).parent().children('.uk-active').removeClass('uk-active');
		$(this).addClass('uk-active');
		var bn = $(this).parent().is('.uk-thumbnav');
		if(bn){
			var g = $(this).parent().parent().prev().children().is('li');
			if(g){
				$(this).parent().parent().prev().children('.uk-active').removeClass('uk-active');
				$(this).parent().parent().prev().children('li').eq(img_num).addClass('uk-active');
			}
		}else{
			$(this).parent().next().children('ul').children('.uk-active').removeClass('uk-active');
			$(this).parent().next().children('ul').children('li').eq(img_num).addClass('uk-active');
		}
		
		var sd = $('.py-banner').children('.uk-position-relative').children('.uk-slideshow-items').children('li');
		sd.eq(img_vc).removeClass('uk-active uk-transition-active');
		sd.eq(img_vc).children('.uk-position-cover').children('img').removeClass('papaya-lazy-load uk-cover load-ready');
		sd.eq(img_vc).children('.uk-position-cover').children('img').css({'height':'','width':''});

		sd.eq(img_num).addClass('uk-active uk-transition-active');
		sd.eq(img_num).children('.uk-position-cover').children('img').addClass('papaya-lazy-load uk-cover load-ready');
		sd.eq(img_num).children('.uk-position-cover').children('img').css({'height':parseInt(wid_q/0.6673),'width':wid_q});
	}
	
})

$(document).on("click",'.uk-position-center-left',function(e){
	var items_ul = $(this).parent().children('.uk-slideshow-items');
	var mn01 = items_ul.children('li').length;
	var mn02 = items_ul.children('.uk-active').index();
	var wid_q = $(window).width();
	var dq = mn02 - 1;
	if(mn02 == 0){
		dq = mn01 - 1;
	}
	
	var thum_ul = $(this).parent().parent().children('.py-banner-thumbnav').children('.uk-thumbnav').children('li');
	thum_ul.eq(mn02).removeClass('uk-active');
	thum_ul.eq(dq).addClass('uk-active');	
	
	var items_li = items_ul.children('li');	
	items_li.eq(mn02).removeClass('uk-active uk-transition-active');
	items_li.eq(mn02).children('.uk-position-cover').children('img').removeClass('papaya-lazy-load uk-cover load-ready');
	items_li.eq(mn02).children('.uk-position-cover').children('img').css({'height':'','width':''});
	
	var sjd = $(this).parent().next().children().is('li');
	
	if(sjd){
		$(this).parent().next().children('li').eq(mn02).removeClass('uk-active');
		$(this).parent().next().children('li').eq(dq).addClass('uk-active');
	}
	
	
	items_li.eq(dq).addClass('uk-active uk-transition-active');
	items_li.eq(dq).children('.uk-position-cover').children('img').addClass('papaya-lazy-load uk-cover load-ready');
	items_li.eq(dq).children('.uk-position-cover').children('img').css({'height':parseInt(wid_q/0.6673),'width':wid_q});
	
})
$(document).on("click",'.uk-position-center-right',function(e){
	var items_ul = $(this).parent().children('.uk-slideshow-items');
	var mn01 = items_ul.children('li').length;
	var mn02 = items_ul.children('.uk-active').index();
	var wid_q = $(window).width();
	var dq = mn02 + 1;
	if(mn02 == mn01 - 1){
		dq = 0;
	}
	
	var thum_ul = $(this).parent().parent().children('.py-banner-thumbnav').children('.uk-thumbnav').children('li');
	thum_ul.eq(mn02).removeClass('uk-active');
	thum_ul.eq(dq).addClass('uk-active');	
	
	var items_li = items_ul.children('li');	
	items_li.eq(mn02).removeClass('uk-active uk-transition-active');
	items_li.eq(mn02).children('.uk-position-cover').children('img').removeClass('papaya-lazy-load uk-cover load-ready');
	items_li.eq(mn02).children('.uk-position-cover').children('img').css({'height':'','width':''});
	
	items_li.eq(dq).addClass('uk-active uk-transition-active');
	items_li.eq(dq).children('.uk-position-cover').children('img').addClass('papaya-lazy-load uk-cover load-ready');
	items_li.eq(dq).children('.uk-position-cover').children('img').css({'height':parseInt(wid_q/0.6673),'width':wid_q});
})