// 第三种 通过方法响应点击事件

$(window).bind("load resize",function(){
    header();
 });
$(document).ready(function(){
	
})

function threeFn(num){
	var gf = document.getElementById("uk-badge");
	gf.innerHTML= num -1 ;
}

function header(){
	var ww = $(window).width();
	$('.py-header').children('.py-header-nav').css({'position':'fixed','top':'0px','width':ww}); 
	if(!$('.py-header').children('.py-header-nav').is('.uk-sticky')){	
		$('.py-header').children('.py-header-nav').addClass('uk-sticky uk-sticky-fixed uk-active uk-sticky-below');
	}
	var hh_g = 80;
	if(ww == 640){
		hh_g = 78;
	}else if(ww < 640){
		hh_g = 65;		
	}
	if($('.py-header').children('div').is('.uk-sticky-placeholder')){
		$('.py-header').children('.uk-sticky-placeholder').css('height',hh_g);
	}else{
		$('.py-header').children('.py-header-nav').after('<div class="uk-sticky-placeholder" style="height:'+hh_g+'px; margin: 0px;"></div>');
	}
	
	$('.py-header').children('.py-header-nav').children().children('.uk-navbar-right').children('.uk-navbar-toggle').addClass('uk-icon uk-navbar-toggle-icon');
	$('.py-header').children('.py-header-nav').children().children('.uk-navbar-right').children('.uk-navbar-toggle').html('<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg>');

	var lan = $('.py-language').children('#py-language-dropdown').children('ul').children('li').eq(0).children('a').html();
	$('.py-language').children('.uk-button').html(lan);
	var cur = $('.py-currency').children('#py-currency-dropdown').children('ul').children('li').eq(1).children('a').html();
	$('.py-currency').children('.uk-button').html(cur);

}



$(document).on("click",'body',function(e){
	if ($(e.target).closest(".pyf-sousuo").length) {
		var uy = $('.py-search-input-box').is('.uk-open');
		if(uy){
			$('.py-search-input-box').removeClass('uk-open');
			$('.py-search-input-box').css('display','none');
		}else{
			var w01 = $(window).width(); 
			$(".pyf-sousuo").parent().next().addClass('uk-open');
			var w02 = $('.py-header').children().children().width();
			var w03 = $(".pyf-sousuo").parent().parent().next().width();
			var w04 = $(".pyf-sousuo").parent().parent().next().next().width();
			var w05 = $(".pyf-sousuo").parent().next().width();
			var wd = w02 - w03 - w04 - w05 - 15*2;
			if(w01 > 640){
				$(".pyf-sousuo").parent().next().css({'display':'block','left':wd,'top':'82px'});
			}else{
				$(".pyf-sousuo").parent().next().css({'display':'block','top':'-71px'});
			}	
		}
	}else{
		if (!$(e.target).closest(".py-search-input-box").length && !$(e.target).closest(".py-banner").length) {
			var uy = $('.py-search-input-box').is('.uk-open');
			if(uy){
				$('.py-search-input-box').removeClass('uk-open');
				$('.py-search-input-box').css('display','none');
			}
		}
	}
	if ($(e.target).closest(".pyf-huabanbeifen4").length) {
		var uy = $('.py-header-language-dropdown').is('.uk-open');
		if(uy){
			$('.py-header-language-dropdown').removeClass('uk-open');
			$('.py-header-language-dropdown').css('display','none');
		}else{
			var w01 = $(window).width(); 
			$(".pyf-huabanbeifen4").parent().next().addClass('uk-dropdown uk-open');
			$("#py-language-dropdown").addClass('uk-dropdown uk-dropdown-boundary');
			$("#py-currency-dropdown").addClass('uk-dropdown');
			var w02 = $('.py-header').children().children().width();
			var w03 = $(".pyf-huabanbeifen4").parent().parent().next().width();
			var w05 = $(".pyf-huabanbeifen4").parent().next().width();
			var wd = w02 - w03 - w05 - 15;
			if(w01 > 640){
				$(".py-header-language-dropdown").css({'display':'block','left':wd,'top':'82px'});
			}else{
				$(".py-header-language-dropdown").css({'display':'block','top':'-71px'});
			}	
		}
	}else{
		if (!$(e.target).closest(".py-header-language-dropdown").length && !$(e.target).closest(".py-banner").length) {
			var uy = $('.py-header-language-dropdown').is('.uk-open');
			if(uy){
				$('.py-header-language-dropdown').removeClass('uk-open');
				$('.py-header-language-dropdown').css('display','none');
			}
		}
	}
	
	if ($(e.target).closest(".uk-navbar-toggle").length) {
		$('#py-nav-mobile').addClass('uk-offcanvas uk-offcanvas-overlay uk-open');
		$('#py-nav-mobile').children().addClass('uk-offcanvas-bar-animation uk-offcanvas-slide mymove');
		$('#py-nav-mobile').css('display','block');
	}else{
		if (!$(e.target).closest(".uk-offcanvas-bar").length && !$(e.target).closest(".py-banner").length) {
			if($('#py-nav-mobile').is('.uk-offcanvas-overlay')){
				$('#py-nav-mobile').removeClass('uk-offcanvas uk-offcanvas-overlay uk-open');
				$('#py-nav-mobile').children().removeClass('uk-offcanvas-bar-animation uk-offcanvas-slide mymove');
				$('#py-nav-mobile').children().addClass('mydhjs');
				setTimeout(function(){
					$('#py-nav-mobile').children().removeClass('mydhjs');
					$('#py-nav-mobile').css('display','');
				},1000);
			}
		}
	}	


})



$(document).on("click",".input-pm-plus",function(){

	var o = $(this).prev().val(); //获取上一个节点值
	$(this).parent('.input-qty-pm').parent('.quantity').next().attr("data-quantity",o);

})

$(document).on("click",".cart-customlocation",function(){
	var s = $(this).attr('href');
	$(s).addClass("uk-offcanvas uk-offcanvas-overlay uk-open");
	$(s).css('display','block');
	$(s).children('.uk-offcanvas-bar').addClass("uk-offcanvas-bar-animation uk-offcanvas-slide mymove");
	
})

$(document).on("click","#py-mini-cart",function(e){
	
	if (!$(e.target).closest(".uk-offcanvas-bar").length) {
        $(this).children('.uk-offcanvas-bar').removeClass("uk-offcanvas-bar-animation uk-offcanvas-slide mymove");
		$(this).children('.uk-offcanvas-bar').addClass("mydhjs");
		setTimeout(function(){
			$("#py-mini-cart").children('.mydhjs').removeClass("mydhjs");
			$("#py-mini-cart").css('display','');
			$("#py-mini-cart").removeClass("uk-offcanvas uk-offcanvas-overlay uk-open");
		},1000);
	
    }
	
})



$(document).on("click",".input-pm-minus",function(){

	var i = $(this).next().val(); //获取上一个节点值
	$(this).parent('.input-qty-pm').parent('.quantity').next().attr("data-quantity",i);

})

$(document).on("click",".input-mini-plus",function(){
	
	var o = $(this).prev().val(); //获取上一个节点值
	
	$(this).prev().val(parseInt(o)+1);
	
	var url = $(this).parent().parent().parent().children('.title_car').attr("href");
	
	
	var uyt = $(this).prev().attr("post_type");
	
	var id = $(this).prev().attr("data_product_id");
	
	if(uyt == 'product_variation'){
		var f_id = $(this).prev().attr("data_variation_id");
		ajax_from_ady(url+"&add-to-cart="+id+"&variation_id="+f_id+"&quantity=1");
		//alert('可选'+);	
	}else{
		ajax_from_ady(url+"?add-to-cart="+id+"&quantity=1");
		//alert('不可选'+url);
	}

	return false; 
})

$(document).on("click",".input-mini-minus",function(){

	var i = $(this).next().val(); //获取下一个节点值
	
	if(i > 1){
		var num = parseInt(i)-1;
		
		var add_url = $(this).parent().parent().parent().children('.title_car').attr("href");

		
		var uyt = $(this).next().attr("post_type");			
		var id = $(this).next().attr("data_product_id");		
		
		var remove_url = $(this).parent().parent().next().attr("href");
		var bbb = $(this).parent().parent().parent().index();
		if(uyt == 'product_variation'){
			
			var f_id = $(this).next().attr("data_variation_id");		
			ajax_from_ady(remove_url);
			ajax_from_ady(add_url+"&add-to-cart="+id+"&variation_id="+f_id+"&quantity="+num);	
		}else{
			ajax_from_ady(remove_url);
			ajax_from_ady(add_url+"?add-to-cart="+id+"&quantity="+num);
		}
		
		setTimeout(function(){
				var nhhh = $("#mini_cart_sff").children().length;
				if(nhhh > 1){
					var gfg = $("#mini_cart_sff li:last-child");			
					$(gfg).insertBefore($("#mini_cart_sff li").eq(bbb));
				}
		}, 500);
		
		
	}else{
		var url = $(this).parent().parent().next().attr("href");
		ajax_from_ady(url);
	}
	
	return false; 

})

$(document).on("click",".product_type_simple",function(){
	
	$(this).children('span#go_globule').css({"opacity":"1","transform":"translate3d(0px,0px,0px)","transition":"all 0s cubic-bezier(0, 0, 0, 0) 0s","display":"block"});
	var y = $(this).offset().top - $(document).scrollTop();//元素在当前视窗距离顶部的位置
	var x = $(this).offset().left;
	
	var cart_y = $('#uk-badge').offset().top - $(document).scrollTop();
	var cart_x = $('#uk-badge').offset().left;
	$(this).children('span#go_globule').css({"transform":"translate3d("+(cart_x-x)+"px,"+(cart_y-y)+"px,55px)","transition":"all 2s cubic-bezier(0,.68,0,1) 0s","opacity":"0"});
	
	setTimeout(function(){		
		var obj = document.getElementById("go_globule");
		obj.style.display = 'none';	
	}, 2000);
})

$(document).on("click",".variations_add_to_cart_button",function(){
	$(this).children('span#go_globule').css({"opacity":"1","transform":"translate3d(0px,0px,0px)","transition":"all 0s cubic-bezier(0, 0, 0, 0) 0s","display":"block"});
	var y = $(this).parent('.woocommerce-variation-add-to-cart').parent('.single_variation_wrap');
	var g = y.parent('#variations_hgh');
	var hg = g.attr("url");
	
	
	var cart_id = $(this).next().val();
	
	var s = y.prev().children('tbody').children('tr').length;
	
	var shuy = ''; 
	for(var i=0;i<s;i++){
		var v1 = y.prev().children('tbody').children('tr').eq(i).children('.value').children('select').attr('name');
		var v2 = y.prev().children('tbody').children('tr').eq(i).children('.value').children('select').val();
		shuy += '&' + v1+"="+v2;
	}
	

	
	var y = $(this).offset().top - $(document).scrollTop();//元素在当前视窗距离顶部的位置
	var x = $(this).offset().left;
	
	var cart_y = $('#uk-badge').offset().top - $(document).scrollTop();
	var cart_x = $('#uk-badge').offset().left;
	
	var variation_id = $(this).next().next().next().val();
	
	if(variation_id == 0 || variation_id == ''){
		
		alert("Select product options before adding them to your shopping cart!");
		
		setTimeout(function(){		
			var obj = document.getElementById("go_globule");
			obj.style.display = 'none';	
		}, 2000);
		
		return false;
	}

	var url = hg + "?variation_id="+variation_id+"&add-to-cart="+cart_id+"&quantity="+$(this).attr("data-quantity")+shuy;
	
	ajax_from_ady(url);
	
	$(this).children('span#go_globule').css({"transform":"translate3d("+(cart_x-x)+"px,"+(cart_y-y)+"px,55px)","transition":"all 2s cubic-bezier(0,.68,0,1) 0s","opacity":"0"});
	
	setTimeout(function(){		
		var obj = document.getElementById("go_globule");
		obj.style.display = 'none';	
	}, 2000);
	
	return false; // 返回false，阻止跳转

})

$(document).on("click",".grouped_add_to_cart_button",function(){
	
	$(this).children('span').eq(1).css({"opacity":"1","transform":"translate3d(0px,0px,0px)","transition":"all 0s cubic-bezier(0, 0, 0, 0) 0s","display":"block"});
	var zj = $(this);
	var f = zj.prev();
	
	var o = f.is('input');
	
	var hg = zj.parent('#grouped_form').attr("url");
	
	var y = zj.offset().top - $(document).scrollTop();//元素在当前视窗距离顶部的位置
	var x = zj.offset().left;
	
	var cart_y = $('#uk-badge').offset().top - $(document).scrollTop();
	var cart_x = $('#uk-badge').offset().left;
	

	if(o){
		var cp = f.prev();
		if(cp.is('table')){
			var tr = cp.children('tbody').children('tr');
			if(tr.length > 0){
				
				tr.each(function () {

					var cart_id = $(this).attr("id").replace("product-","");
					var quantity = $(this).children('td').eq(0).children('div').children('span').children('input').val();

					if(quantity > 0){
						var url = hg + "?add-to-cart="+cart_id+"&quantity="+quantity;
						ajax_from_ady(url);

						zj.children('span#go_globule').css({"transform":"translate3d("+(cart_x-x)+"px,"+(cart_y-y)+"px,55px)","transition":"all 2s cubic-bezier(0,.68,0,1) 0s","opacity":"0"});
					}
				});
				setTimeout(function(){		
					var obj = document.getElementById("go_globule");
					obj.style.display = 'none';	
				}, 2000);
			}
		}
	}
	
	
	return false; // 返回false，阻止跳转

})

$(document).on("change",".mini_cart_input",function(){
	var a1 = $(this).attr('value');
	var a2 = $(this).val();
	if(a2 == 0){
		$(this).prev().trigger("click");
	}else if(a2 > a1){
		var yt = a2 - a1;
		
		var url = $(this).parent().parent().parent().children('.title_car').attr("href");
								
		var uyt = $(this).attr("post_type");
		
		var id = $(this).attr("data_product_id");
		
		if(uyt == 'product_variation'){
			var f_id = $(this).attr("data_variation_id");
			ajax_from_ady(url+"&add-to-cart="+id+"&variation_id="+f_id+"&quantity="+yt);
			//alert('可选'+);	
		}else{
			ajax_from_ady(url+"?add-to-cart="+id+"&quantity="+yt);
			//alert('不可选'+url);
		}
		return false; 		
	}else if(a2 < a1){
		
		
		var add_url = $(this).parent().parent().parent().children('.title_car').attr("href");

		
		var uyt = $(this).attr("post_type");			
		var id = $(this).attr("data_product_id");		
		
		var remove_url = $(this).parent().parent().next().attr("href");
		var bbb = $(this).parent().parent().parent().index();
		if(uyt == 'product_variation'){

			var f_id = $(this).attr("data_variation_id");		
			ajax_from_ady(remove_url);
			ajax_from_ady(add_url+"&add-to-cart="+id+"&variation_id="+f_id+"&quantity="+a2);	
		}else{
			ajax_from_ady(remove_url);
			ajax_from_ady(add_url+"?add-to-cart="+id+"&quantity="+a2);
		}
		
		setTimeout(function(){
				var nhhh = $("#mini_cart_sff").children().length;
				if(nhhh > 1){
					var gfg = $("#mini_cart_sff li:last-child");			
					$(gfg).insertBefore($("#mini_cart_sff li").eq(bbb));
				}
		}, 500);
		
		
		return false; 		
	}
	
})



function ajax_from_ady(url){
	var host = window.location.host;
	
	//创建xmlHttp对象
	var xmlHttp;
	if(window.ActiveXObject){
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}

	//获取表单值
	var datastr = "update_my_cart";
	var url = url;

	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			//alert(xmlHttp.responseText);
		}
	}
	
	//提交数据
	xmlHttp.open("POST",url,false);
	xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlHttp.send(datastr);

	
	$('.widget_shopping_cart_content').empty();

	$('body').append("<script src='/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>"); 
	
}

$(document).on("click","#wisnhju",function(){
	$('#butt_vue').css('display','block');	
	var id = $(this).attr('data-product_id');
	var i = 'app_'+String(id);
	var ii = 'gfdagsg';
	
	var obj = document.getElementById(i);
	//alert("Click OK to enter while loading!");
	
	//tan_kuan();
	
	$(obj).children().children('.uk-modal-close-default').html('<svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg>');
	
	obj.className="uk-flex-top uk-modal uk-flex uk-open";//相当于在div添加class属性 仅class例外
	obj.style.display='block';
	obj.style.cssText='width:100%;display:block;';
	var uy = $("#product-"+id).children('div').children('div').children('div').children("ol").children("li").length;
	
	var wid = $("#product-"+id).children('div').children('div').children('div').children(".wc-product--images").width();
	

	$("#product-"+id).children('div').children('div').children('div').children(".flex-viewport").css('height',wid);
	$("#product-"+id).children('div').children('div').children('div').children(".flex-viewport").children("figure").children('.woocommerce-product-gallery__image').css('width',wid);
				
	
})

$(document).on("click",".uk-modal-close-default",function(){
	$(this).parent().parent().css('display','none');
	if($(this).parent().parent().parent().is('#butt_vue')){
		$('#butt_vue').css('display','none');
	}
})

function tan_kuan(){
	 $('#tan_kuan').html('operate successfully').addClass('alert-success').show().delay(1500).fadeOut();
}


$(document).on("click",".flex-control-thumbs li",function(){
	var num = $(this).index();
	var wid = $(this).parent('.flex-control-thumbs').prev().prev().width();
	if(num > 0){
		$(this).parent('.flex-control-thumbs').prev().children('figure').css("transform","translate3d(-"+wid*num+"px, 0px, 0px)");
	}
	
})

$(document).on("click",".pswp__button--close",function(){
	//alert("关闭");
	//var num = $(this).index();
	$('.pswp--supports-fs').css('display','none');
	//$('.pswp__container').empty();
	$('.pswp__img').css('display','none');
	
})
$(document).on("click",".woocommerce-product-gallery__trigger",function(){

	$('.pswp--supports-fs').css('display','block');
	$('.pswp__img').css('display','block');
	//var yt = $('.pswp__caption__center').text();
	//alert(yt);
	//alert('测试');

})
$(document).on("click",".pswp__container",function(){

	$('.pswp--supports-fs').css('display','none');
	$('.pswp__img').css('display','none');
	
})



$(document).on("click","#shipping_method li",function(){
	var sasa  = $(this).index();
	setTimeout(function(){
		$('#shipping_method li').eq(sasa).children('input').checked = true;
		$('#shipping_method li').eq(sasa).children('input').attr('checked',true);
	}, 3000);
})

$(document).on("click",".woo-jiujs-jhu",function(){
	var inde = $(this).index();
	$(this).parent().children('.uk-active').removeClass('uk-active');
	$(this).addClass("uk-active");
	var num = $(this).attr('data-key');
	var key = $(this).attr('data-value');

	$(this).parent().prev('.value').children('select').children('option').attr("selected",false);
	
	//$(this).parent().prev('.value').children('select').children('option').eq(num).attr("selected",true);

	$(this).parent().prev('.value').children('select').get(0).selectedIndex=num;

	//alert($(this).parent().prev('.value').children('select').find("option:selected").text());
	
	$(this).parent().prev('.value').children('select').children('option').eq(num).trigger("change");
	
	var kkjj = $(this).parent().parent().prevAll().length;	
	var kkij = $(this).parent().parent().nextAll().length;

	if(kkjj > 0){
		for(var i = 0;i < kkjj;i++){
			var ukj = $(this).parent().parent().prevAll().eq(i);
			var arrList = [];
			var tedx = ukj.children('.py-variation-select').children('button').length;
			for(var lo = 0;lo<tedx;lo++){
				var ljk = ukj.children('.py-variation-select').children('button').eq(lo).attr('data-value');
				arrList.push(ljk);
			}
			
			var op = ukj.children('.value').children('select').children('option');
			var uyu = op.length;
			var arrLis = [];
			for(var k = 1;k<uyu;k++){
				var tet = op.eq(k).text();
				arrLis.push(tet);
			}
	/* 		var io = ukj.children('.py-variation-select').children('.uk-active').attr('data-value');
			if(inArray(io,arrLis) == -1){
				ukj.children('.py-variation-select').children('.uk-active').removeClass('uk-active');
			} */
			$.arrayIntersect = function(a, b){
				return $.merge($.grep(a, function(i){
					return $.inArray(i, b) == -1;
					}), $.grep(b, function(i){
					return $.inArray(i, a) == -1;
					})
				);
			};
			var io = ukj.children('.py-variation-select').children('.uk-active').attr('data-value');

			var uy = $.arrayIntersect(arrLis,arrList)
			if(uy.length > 0){
				for(var b =0;b< uy.length;b++){
					var plkmn = uy[b];
					if(io != plkmn){
						for(var nb = 0;nb<tedx;nb++){
							var gf = ukj.children('.py-variation-select').children('button').eq(nb).attr('data-value');
							if(plkmn == gf){								
								ukj.children('.py-variation-select').children('button').eq(nb).attr("disabled","disabled");
							}else{
								
							}
						}
					}
				}
			}else{
				for(var nb = 0;nb<tedx;nb++){							
					ukj.children('.py-variation-select').children('button').eq(nb).removeAttr("disabled");

				}
			}
		}
	}
	
	if(kkij > 0){
		for(var i = 0;i < kkij;i++){
			var ukj = $(this).parent().parent().nextAll().eq(i);
			var arrList = [];
			var tedx = ukj.children('.py-variation-select').children('button').length;
			for(var lo = 0;lo<tedx;lo++){
				var ljk = ukj.children('.py-variation-select').children('button').eq(lo).attr('data-value');
				arrList.push(ljk);
			}
			
			var op = ukj.children('.value').children('select').children('option');
			var uyu = op.length;
			var arrLis = [];
			for(var k = 1;k<uyu;k++){
				var tet = op.eq(k).text();
				arrLis.push(tet);
			}
	/* 		var io = ukj.children('.py-variation-select').children('.uk-active').attr('data-value');
			if(inArray(io,arrLis) == -1){
				ukj.children('.py-variation-select').children('.uk-active').removeClass('uk-active');
			} */
			$.arrayIntersect = function(a, b){
				return $.merge($.grep(a, function(i){
					return $.inArray(i, b) == -1;
					}), $.grep(b, function(i){
					return $.inArray(i, a) == -1;
					})
				);
			};
			var io = ukj.children('.py-variation-select').children('.uk-active').attr('data-value');

			var uy = $.arrayIntersect(arrLis,arrList)
			if(uy.length > 0){
				for(var b =0;b< uy.length;b++){
					var plkmn = uy[b];
					if(io != plkmn){
						for(var nb = 0;nb<tedx;nb++){
							var gf = ukj.children('.py-variation-select').children('button').eq(nb).attr('data-value');
							if(plkmn == gf){								
								ukj.children('.py-variation-select').children('button').eq(nb).attr("disabled","disabled");
							}else{
								
							}
						}
					}
				}
			}else{
				for(var nb = 0;nb<tedx;nb++){							
					ukj.children('.py-variation-select').children('button').eq(nb).removeAttr("disabled");

				}
			}
		}
	}
	
})


$(document).ready(function(){  
	//alert("测试");   加载自动执行
	$('.variations').children('tbody').children('tr').children('.value').children('select').css('display','none');
	$('.variations').children('tbody').children('tr').children('.value').css('display','none');
	var fd = $('.variations').children('tbody').children('tr');
	var gf = fd.length;
	if(gf > 0){
		var gg = fd.eq(-1).children('.value').children('select').children('option').length;
		var jhg = '';
		for(var j = 1; j < gg;j++){
			var tr = fd.eq(-1).children('.value').children('select').children('option').eq(j).text();
			if(j>1){
				jhg += '<button type="button" class="uk-button uk-button-default uk-button-small woo-jiujs-jhu" data-value="'+tr+'" data-key="'+j+'">'+tr+'</button>';
			}else{
				jhg += '<button type="button" class="uk-button uk-button-default uk-button-small woo-jiujs-jhu uk-active" data-value="'+tr+'" data-key="'+j+'">'+tr+'</button>';	
			}
		}
		fd.eq(-1).children('.value').after("<td class='py-variation-select count-2'>"+jhg+"</td>");
		fd.eq(-1).children('.value').children('select').children('option').eq(1).attr("selected",true);

		if(gf != 1){
			fd.eq(-1).children('.value').children('select').children('option').eq(1).trigger("change");
			//fd.eq(-1).children('.py-variation-select').children('.woo-jiujs-jhu').eq(0).trigger("click");
			
			for(var kk = 0;kk<gf-1;kk++){
				var mn = fd.eq(kk).children('.value').children('select').children('option').length;
				var hgh = '';
				for(var lkl = 1;lkl<mn;lkl++){
					var trr = fd.eq(kk).children('.value').children('select').children('option').eq(lkl).text();
					if(lkl>1){
						hgh += '<button type="button" class="uk-button uk-button-default uk-button-small woo-jiujs-jhu" data-value="'+trr+'" data-key="'+lkl+'">'+trr+'</button>';
					}else{
						hgh += '<button type="button" class="uk-button uk-button-default uk-button-small woo-jiujs-jhu uk-active" data-value="'+trr+'" data-key="'+lkl+'">'+trr+'</button>';	
					}
				}
				fd.eq(kk).children('.value').after("<td class='py-variation-select count-2'>"+hgh+"</td>");
				fd.eq(kk).children('.value').children('select').children('option').eq(1).attr("selected",true);
				setTimeout(function(){
				fd.eq(-1).children('.py-variation-select').children('.woo-jiujs-jhu').eq(0).trigger("click");
				},600);
			}
		}	
	}
	
	
	//var nmn = fd.eq(0).children('.value').children('select').children('option').length;
	///alert(nmn);
}); 

