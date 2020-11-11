$(document).ready(function(){  

	$('#reviews').css({'background-color':'#fff','padding':'0rem 1rem'});
	$('#review_form_wrapper').css('display','none');
	$('#respond').children('form').children().css('display','none');
	$('#respond').children('form').children().eq(1).after('<p class="comment-form-rating-btn" style="display: block;"><button class="uk-button uk-button-default xxx-button" type="button" data-value="5"> <div class="star-rating"><span style="width:100%"></span></div>Perfect</button><button class="uk-button uk-button-default xxx-button" type="button" data-value="4"> <div class="star-rating"><span style="width:80%"></span></div>Good</button><button class="uk-button uk-button-default xxx-button" type="button" data-value="3"> <div class="star-rating"><span style="width:60%"></span></div>Average</button><button class="uk-button uk-button-default xxx-button" type="button" data-value="2"> <div class="star-rating"><span style="width:40%"></span></div>Not that bad</button><button class="uk-button uk-button-default xxx-button" type="button" data-value="1"> <div class="star-rating"><span style="width:20%"></span></div>Very poor</button></p>');
})

$(document).on("click",".reviews_dshds_uk-button",function(){
	$('#review_form_wrapper').css({'display':'block','position':'fixed','top':'0','left':'0','z-index':'999','height':'100%','width':'100%','background-color':'rgb(0 0 0 / 46%)'});
	$('#review_form').css('display','block');
	var wd = $(window).width();
	var hg = $(window).height();
	if(wd <= 640){
		var w01 = '90%';
		var le01 = '5%';
	}else{
		var w01 = '640px';
		var le01 = (wd - 640)/2;
	}
	$('#review_form').css({'width':w01});
	$('#reply-title').before('<button class="uk-modal-close-default uk-icon uk-close reviews-close" type="button" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>');
	$('#reply-title').before('<h4 style="text-align:center;margin:1rem auto;padding-bottom:2rem;">HOW WOULD YOU RATE THIS ITEM</h4>');
	var hh = $('#review_form').height();
	var hv = (hg - hh)/2;
	$('#review_form').css({'marginTop':hv});
	
})

$(document).on("click",".reviews-close",function(){
	$(this).next().remove();
	$(this).remove();
	$('#review_form_wrapper').css({'display':'none','position':'','top':'','left':'','z-index':'','height':'','width':'','background-color':''});
})

$(document).on("click",".xxx-button",function(){
	var xx = $(this).attr('data-value');
	$(this).parent().css('display','none');
	$(this).parent().prev().children('select').val(xx);
	$(this).parent().next().css('display','block');
	$(this).parent().next().after('<div class="button_zzz"><button class="button-back-gf">BACK</button><button class="button-next-gf">NEXT</button></div>');
	$(this).parent().parent().prev().prev().text('TELL US MORE');
	$(this).parent().parent().prev().prev().prev().css('display','none');
})


$(document).on("click",".button-back-gf",function(){
	if($(this).parent().prev().is(".comment-form-comment")){
		$(this).parent().parent().prev().prev().prev().css('display','block');
		$(this).parent().parent().prev().prev().text('HOW WOULD YOU RATE THIS ITEM');
		$(this).parent().prev().css('display','none');
		$(this).parent().prev().prev().css('display','block');
		$(this).parent().remove();
	}else{
		$(this).parent().parent().prev().prev().text('TELL US MORE');
		$(this).parent().prevAll().css('display','none');
		$(this).parent().parent().children('.comment-form-comment').css('display','block');
		$(this).parent().insertAfter($(this).parent().parent().children('.comment-form-comment'));
	}
	return false;
})
$(document).on("click",".button-next-gf",function(){
	if($(this).parent().prev().is(".comment-form-comment")){
		$(this).parent().parent().prev().prev().text('ABOUT YOU');
		var h = $(this).parent().prev().children('textarea').val();
		if(h == ''){
			$(this).parent().prev().children('textarea').css('border-color','red');
		}else{
			$(this).parent().prev().css('display','none');
			$(this).parent().nextAll().css({'display':'block','width':'100%'});
			
			$(this).parent().nextAll().eq(-1).css('display','none');
			
			$(this).parent().insertAfter($(this).parent().nextAll().eq(-1));
			$(this).text('submit');
		}
		return false;
	}else{
		$(this).parent().parent().prev().prev().text('HOW WOULD YOU RATE THIS ITEM');
		var con = $(this).parent().parent().children('.comment-form-author').children('input').val();
		var em = $(this).parent().parent().children('.comment-form-email').children('input').val();
		if(con == ''){
			$(this).parent().parent().children('.comment-form-author').children('input').css('border-color','red');
			return false;
		}else{
			if(em == ''){
				$(this).parent().parent().children('.comment-form-email').children('input').css('border-color','red');	
				return false;				
			}else{
				//验证邮箱
				var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
				if(!reg.test(em)){
					$('<span style="color:red;">Email format error!</span>').insertAfter($(this).parent().parent().children('.comment-form-email').children('input'));
					return false;
				}else{
					$(this).prev().children('#submit').trigger("click");
				}	
			}
		}
	}
})



