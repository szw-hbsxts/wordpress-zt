// 第三种 通过方法响应点击事件
function subtraction(a,b){
	alert("减法");
	var obj = document.getElementById(a);
	alert(obj);
}

function addition(a,b){
	alert("加法");
	var fd = document.getElementById(a).value="5";
}

function threeFn(num){
	var gf = document.getElementById("uk-badge");
	gf.innerHTML= num -1 ;
}

/* function wogfsh(shu){
	alert(shu);
} */

$(document).on("click",".input-pm-plus",function(){

	var o = $(this).prev().val(); //获取上一个节点值
	$(this).parent('.input-qty-pm').parent('.quantity').next().attr("data-quantity",o);

})
$(document).on("click",".input-pm-minus",function(){

	var i = $(this).next().val(); //获取上一个节点值
	$(this).parent('.input-qty-pm').parent('.quantity').next().attr("data-quantity",i);

})

$(document).on("click",".input-mini-plus",function(){

	var o = $(this).prev().val(); //获取上一个节点值
	
	$(this).prev().val(o+1);
	alert(o);

})

$(document).on("click",".input-mini-minus",function(){

	var i = $(this).next().val(); //获取下一个节点值
	$(this).next().val(i-1);

	
	alert(i);

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

	var url = hg + "?variation_id="+variation_id+"&add-to-cart="+cart_id+"&quantity="+$(this).attr("data-quantity");
	
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
function ajax_from_ady(url){
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
	document.getElementById("pl").innerHTML = "表单已提交";
	
	$('.widget_shopping_cart_content').empty();

	$('body').append("<script src='http://www.wdp01.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>"); 
	
}

$(document).on("click","#wisnhju",function(){
	
	alert("Click OK to enter while loading!");

	var id = $(this).attr('data-product_id');
	var i = 'app_'+String(id);
	var ii = 'gfdagsg';

	var obj = document.getElementById(i);
	obj.className="uk-flex-top uk-modal uk-flex uk-open";//相当于在div添加class属性 仅class例外
	obj.style.display='block';
	obj.style.cssText='width:100%;display:block;';
	var uy = $('.flex-control-thumbs').children("li").length;
	$('.flex-viewport').css('height','auto');
	$('.flex-active-slide').css('width',100/(uy*2)+'%');	

	
})

$(document).on("click",".flex-control-thumbs li",function(){
	//var num = $(this).index();
	//$('.flex-viewport').css('height','auto');
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


$(document).ready(function(){  
	//alert("测试");   加载自动执行
}); 