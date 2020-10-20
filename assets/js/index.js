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

function diaoyong(id){
	//1.创建XMLHttpRequest对象
   //XMLHttpRequest 对象用于和服务器交换数据。
   //为了应对所有的现代浏览器，包括 IE5 和 IE6，请检查浏览器是否支持 XMLHttpRequest 对象。
   //如果支持，则创建 XMLHttpRequest 对象。
   //如果不支持，则创建 ActiveXObject ：
   var xhtp;
   if(window.XMLHttpRequest){
	   //支持ie6 以上
	   xhtp=new XMLHttpRequest();
   }else{
	   xhtp=new ActiveXObject("Microsoft.XMLHTTP");
   }  
   
   //2.规定请求
   //open(method,url,async)  规定请求的类型、URL 以及是否异步处理请求。
   //method：请求的类型；GET 或 POST
   //url：文件在服务器上的位置
   //async：true（异步）或 false（同步）
   //以get方式请求  php文件 传递参数
   var url = "http://www.wdp01.com/wp-content/themes/wordpress-zt/b.php?id="+id;
   xhtp.open("GET",url,true);    

   //3.发送请求
   //send(string) 将请求发送到服务器。
   //string：仅用于 POST 请求
   xhtp.send();
   
   //4.响应请求
   //onreadystatechange  存储函数（或函数名），每当 readyState 属性改变时，就会调用该函数。
   xhtp.onreadystatechange=function () {
	   //readyState 存有 XMLHttpRequest 的状态。从 0 到 4 发生变化。           
	//0: 请求未初始化
	//1: 服务器连接已建立
	//2: 请求已接收
	//3: 请求处理中
	//4: 请求已完成，且响应已就绪
	//status 状态
	//200: "OK"
	//404: 未找到页面
	   if(xhtp.readyState==4  &&  xhtp.status==200)
	   //当 readyState 等于 4 且状态为 200 时，表示响应已就绪：
	   //responseText 获得字符串形式的响应数据。
	   //responseXML  获得 XML 形式的响应数据。
	   //$("#gfdagsg").html(xhtp.responseText);//在当前页面显示php文件的数据
	   $("#gfdagsg").append(xhtp.responseText);
   }
}

$(document).on("click","#wisnhju",function(){
	
	alert("Click OK to enter while loading!");

	var id = $(this).attr('data-product_id');
	var i = 'app_'+String(id);
	var ii = 'gfdagsg'
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


$(document).ready(function(){  
	//alert("测试");   加载自动执行
}); 