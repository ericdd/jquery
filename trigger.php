<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>trigger</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<style type="text/css">
*{list-style:none;font-size:14px;font-family:tahoma;}
p{width:600px;padding:20px;background:blue;color:#fff}

.div{width:600px;padding:20px;background:red;color:#fff}

</style>
</head>
<body>

<p id="p1">第一个段落P </p>
<p id="p2">第二个段落P</p>

<div class="div" id="div">aa</div>


<script type="text/javascript" src="jquery-1.7.js"></script>
<script type="text/javascript">

$("p").bind("click",function(){
	alert(this.innerHTML);
})

$("p").bind("mouseover",function(){
	$("#div").html(Math.random())
})

$("#p1").trigger("click");
$("#p2").trigger("mouseover");

</script>
</body>
</html>

