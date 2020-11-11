$(window).bind("load resize",function(){
   var ww = $(window).width();
   if(ww <= 640){
	   var gfdjas = $('.py-checkout-logo').next().is('.py-checkout-order-summary');
	   if(!gfdjas){
		   $('.py-checkout-logo').after('<div class="py-checkout-order-summary">'+
		   '<ul class="uk-accordion" uk-accordion="">'+
		   '<li class="" style="margin-left:0;">'+
		   '<a class="uk-accordion-title" href="#">'+
		   '<div><i class="pyf pyf-gouwuche"></i> <span> order summary</span></div>'+
		   '<span class="order-total">'+
		   $('.py-shop-table').children('tfoot').children('.order-total').children('td').children('strong').children('span').html()+
		   '</span>'+
		   '</a>'+
		   '<div class="uk-accordion-content py-shop-table" style="display:none;">'+
		   '</div></li></ul></div>');
	   }
   }
 })
 


$(document).on("click",'.uk-accordion-title',function(){
	var fs = $('.py-checkout-order-summary').children('ul').children('li');
	if(fs.is('.uk-open')){
		fs.removeClass('uk-open');
		fs.children('.uk-accordion-content').css('display','none');
	}else{
		fs.addClass('uk-open');
		fs.children('.uk-accordion-content').css('display','block');	
	}
	
	var as01 = $('#fdsjksk').children('tbody').clone(true);
	$('.uk-accordion-content').html(as01);
	
})

$(document).on("click",'#shipping_method li',function(){
	setTimeout(function(){
		var s = $('.py-shop-table').children('tfoot').children('.order-total').children('td').children('strong').children('span').html();
		$('.uk-accordion').children('li').children('a').children('span').html(s);
	},1000);
	
})

$(document).on("click",".gfgkjaj",function(){
	setTimeout(function(){
			var s = $('.py-shop-table').children('tfoot').children('.order-total').children('td').children('strong').children('span').html();
			$('.uk-accordion').children('li').children('a').children('span').html(s);	
	},1000);
	var shuju = $(this).prev().val();
	if(shuju == ''){
		setTimeout(function(){
			$('.woocommerce-error').css('display','none');		
		},1000);
	}
	
	$('.woocommerce-form-coupon').children('.input-group-text-button').children('.input-text').val(shuju);
	$('.woocommerce-form-coupon').children('.input-group-text-button').children('.button').trigger("click");
	return false;
})
$(document).on("click",".woocommerce-remove-coupon",function(){
	setTimeout(function(){
		var s = $('.py-shop-table').children('tfoot').children('.order-total').children('td').children('strong').children('span').html();
		$('.uk-accordion').children('li').children('a').children('span').html(s);
	},2000);

})

$(document).ready(function(){
	$('.entry-title').addClass('uk-article-title py-title');
	$('.entry-title').removeClass('entry-title h3');
	var hdg = $('#from_checkout');
	$('#customer_details').addClass('uk-width-3-5@m py-checkout');
	$('#order_review').addClass('uk-width-2-5@m');
	var sjs = $('#customer_details').children('.col-1').children().eq(0).children('h3');
	sjs.text('Billing & Shipping');
	var sh = $('.py-checkout-order-summary-after');
	$(sh).insertAfter(sjs);
	var as01 = $('#billing_city_field').children('label').text();
	$('#billing_city_field').children('span').children('input').attr('placeholder',as01);
	var as02 = $('#billing_postcode_field').children('label').text();
	$('#billing_postcode_field').children('span').children('input').attr('placeholder',as02);
	var as03 = $('#billing_phone_field').children('label').text();
	$('#billing_phone_field').children('span').children('input').attr('placeholder',as03);
	var as04 = $('#billing_email_field').children('label').text();
	$('#billing_email_field').children('span').children('input').attr('placeholder',as04);
	var as05 = $('#billing_first_name_field').children('label').text();
	$('#billing_first_name_field').children('span').children('input').attr('placeholder',as05);
	var as06 = $('#billing_last_name_field').children('label').text();
	$('#billing_last_name_field').children('span').children('input').attr('placeholder',as06);
	
	$('.woocommerce-shipping-fields').addClass('uk-margin-top');
	$('.woocommerce-shipping-fields').text('');
	$('.woocommerce-shipping-fields').after('<button id="py-additional-fields-more-btn" class="uk-hidden@m uk-button uk-width-1-1 uk-margin-small-bottom" type="button"> Additional information <span uk-icon="icon:chevron-double-left;ratio: 0.8" class="uk-icon"><svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-double-left"><polyline fill="none" stroke="#000" stroke-width="1.03" points="10 14 6 10 10 6"></polyline><polyline fill="none" stroke="#000" stroke-width="1.03" points="14 14 10 10 14 6"></polyline></svg></span></button>');
	$('.woocommerce-additional-fields').attr('id','py-additional-fields');
})

$(document).ready(function(){
	$('#billing_country_field').addClass('uk-width-1-3@s');
	$('#billing_state_field').addClass('uk-width-1-3@s');
	$('#billing_postcode_field').addClass('uk-width-1-3@s');
	$('#billing_country_field').attr('data-priority','80');
	$('#billing_state_field').attr('data-priority','105');
	$('#billing_postcode_field').attr('data-priority','106');
	$('#billing_country_field').css({'float':'left','clear':'none'});
	$('#billing_state_field').css({'float':'left','clear':'none'});
	$('#billing_postcode_field').css({'float':'right','clear':'none'});
	setTimeout(function(){
		$('#billing_country_field').insertBefore('#billing_state_field');
	}, 1000);
	

	var sg = $('#payment ul li').length;
	if(sg > 0){
		if(sg > 1){
			if($('#payment ul li').is('.payment_method_paypal') || $('#payment ul li').is('.payment_method_bacs')){
				setTimeout(function(){
					$('.wc_payment_method').css('display','none');
					$('.wc_payment_method input').css('display','none');
					$('.wc_payment_method label').css('padding-left','0');
				}, 2000);
				if($('#payment ul li').is('.payment_method_paypal')){
					setTimeout(function(){
						$('.payment_method_paypal').css('display','block');
					}, 2000);
				}else{
					setTimeout(function(){
						$('.payment_method_bacs').css('display','block');
					}, 2000);
				}
			}

		}
		if($('#payment ul li').is('.payment_method_paypal')){
			setTimeout(function(){
				$('.py_paypal_button_cart').css('display','');
			}, 2000);
		}
		if($('#payment ul li').is('.payment_method_bacs')){						
			setTimeout(function(){
				$('.paypal-button-label-container').css('display','');
				var t = $('#payment ul').children('.payment_method_bacs').children('label').text();
				$('.paypal-button-label-container').children('.paypal-button-text').text(t);
			}, 2000);
		}
		if(!$('#payment ul li').is('.payment_method_paypal') && !$('#payment ul li').is('.payment_method_bacs')){
			setTimeout(function(){
				$('#place_order').css('display','');		
			}, 2000);
		}

	}else{
		$('#wpg_paypal_button_checkout').css('display','none');
	}
})

$(document).on("click",'.py-checkout-order-summary-after div div a',function(e){
	var s = $('body').children().is('#wc-login-form');
	if(s){
		$('#wc-login-form').addClass('uk-open');
		$('#wc-login-form').css('display','block');
	}else{
		var a1 = '<div id="wc-login-form" class="woocommerce uk-modal uk-open" uk-modal="" style="display:block;">';
		var a2 = '<div class="uk-modal-dialog uk-modal-body">';
		var a3 = '<button class="uk-modal-close-default uk-icon uk-close" type="button" uk-close="">'+
				'<svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon">'+
				'<line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>'+
				'<line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>'+
				'</svg></button>';
		var a4 = '<h2 class="uk-modal-title">Login</h2>';

		
		$('body').append(a1+a2+a3+a4+'</div></div>');

		$($('.woocommerce-form-login')).insertAfter($('.uk-modal-title'));
		$('.woocommerce-form-login').css('display','block');

		
		return false;
		
	}
})



$(document).on("click",'.uk-modal-close-default',function(){
	$('#wc-login-form').removeClass('uk-open');
	$('#wc-login-form').css('display','');
})

$(document).on("click",'.py_paypal_button_cart',function(){
	var sg = $('#payment ul li').length;
	if(sg > 1){
		$("#payment_method_paypal").checked = true;
		$('#payment_method_paypal').attr('checked',true);
	}	
	$("#place_order").trigger("click");
})

$(document).on("click",'.paypal-button-label-container',function(){
	var sg = $('#payment ul li').length;
	if(sg > 1){
		$("#payment_method_bacs").checked = true;
		$('#payment_method_bacs').attr('checked',true);
	}	
	$("#place_order").trigger("click");
})

$(document).on("click",'#py-additional-fields-more-btn',function(){
	var g = $("#py-additional-fields").children().is('.djj');
	if(g){
		$("#py-additional-fields").children().removeClass('djj');
		$("#py-additional-fields").children().css('display','');
	}else{
		$("#py-additional-fields").children().addClass('djj');
		$("#py-additional-fields").children().css('display','block');
	}
	
})


$(document).on("click",'.input-mini-plus, .input-mini-minus, .mini_remove_from_cart',function(){
	setTimeout(function(){
		$('.gfgkjaj').trigger("click");
	}, 2000);
})

$(document).on("change",'.mini_cart_input',function(){
	setTimeout(function(){
		$('.gfgkjaj').trigger("click");
	}, 2000);
})

