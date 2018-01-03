<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>ajax</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<script type="text/javascript" src="../jquery-1.7.js"></script>
<style type="text/css">
*{list-style:none;font-size:14px;font-family:tahoma;}
#btn{display:block;}
#loading{background:#a40000;color:#fff;padding:10px;width:800px;}
#a,#b,#c{background:#000;color:#fff;padding:10px;width:800px;margin:5px 0;word-wrap:break-word;word-break:break-all;}
#type{padding:3px;margin:5px 0;}
label{font-size:14px;margin:5px 0;display:inline-block;cursor:pointer;}
#name,#async{padding:3px;width:70px;margin:5px;}
#loader{}
.lab{display:inline-block;background:purple;color:#fff;padding:5px 10px;}
#center{width:800px;margin:20px auto;}
#wait{background:purple;color:#fff;padding:10px;width:800px;height:100px;margin:5px 0;word-wrap:break-word;word-break:break-all;}


</style>
</head>
<body>
<xmp>

global	Boolean	(默认: true) 是否触发全局 AJAX 事件。设置为 false 将不会触发全局 AJAX 事件，如 ajaxStart 或 ajaxStop 。
可用于控制不同的Ajax事件

</xmp>

<div id="center">

<input type="button" id="btn" value="确 定"/>
<div class="box">
<input type="text" id="name" name="name" value="get" maxlength=""/>
<label class="lab" id="get">get</label>
<label class="lab" id="post">post</label>
</div>
<div class="box">
<input type="text" id="async" name="async" value="true" maxlength=""/>
<label class="lab" id="true" >异步true</label>
<label class="lab" id="false" >同步false</label>
</div>

<pre id="a">a</pre>
<div id="c">c</div>
<div id="b">b</div>
<div id="wait">wait</div>

</div>

<script type="text/javascript">

$("#btn").bind("click",function(e){
var t=new Date().getTime();
$.ajax({
url:"sleep.php?aa=bb&mr="+Math.random(),
type:$("#name")[0].value||"post",
dataType: "html",
global: true,
async:eval($("#async")[0].value),
data:{name:"nolam",age:"30",arr:[1,2,3,6],"interest":"旅游"},

beforeSend:function(){
this.url+="&zz="+encodeURIComponent("@-_-66");
this.url+="&"+encodeURIComponent("姓名")+"="+encodeURIComponent("诺兰");
},

success:function(data, textStatus){
$("#b")[0].innerHTML=textStatus+ ", 时间差："+(new Date().getTime()-t) +"<hr />"+data;
},

complete: function(xhr,textStatus){
$("#c")[0].innerHTML=xhr.readyState +", "+textStatus+", 时间差："+(new Date().getTime()-t) +"<hr />";
},

error:function(xhr, textStatus, errorThrown){
alert(textStatus +","+errorThrown);
}
});

$("#a")[0].innerHTML="时间差："+(new Date().getTime()-t) +"<hr />"+Math.random();

}
)

$("#get,#post").bind("click",function(e){
$("#name")[0].value = this.innerHTML;
}
)

$("#true,#false").bind("click",function(e){
$("#async")[0].value = this.id;
}
)

$("#wait").ajaxStart(function(){
$("#wait").slideUp();
});

$("#wait").ajaxComplete(function(){
$("#wait").html(Math.random()).slideDown();
});


</script>
</body>
</html>

