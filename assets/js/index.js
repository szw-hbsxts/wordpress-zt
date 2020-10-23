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

$(document).on("click",".product_type_simple",function(){
	
	alert('ecss001');

})

$(document).on("click","#variations_hgh",function(){
	
	alert('ecss002');
	var hg = $(this).attr("url");
	alert(hg);
	//创建xmlHttp对象
	var xmlHttp;
	if(window.ActiveXObject){
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}

	//获取表单值
	var datastr = "username=ces";
	var url = hg;

	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			alert(xmlHttp.responseText);
		}
	}

	//提交数据
	xmlHttp.open("POST",url,false);
	xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlHttp.send(datastr);
	document.getElementById("p1").innerHTML = "表单已提交";
	return false;	//重要!一定要写

})

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