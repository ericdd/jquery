<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>triggerHandler</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<style type="text/css">
*{list-style:none;font-size:14px;font-family:tahoma;}
</style>
</head>
<body>

<pre>

如果你对一个focus事件执行了 .triggerHandler() ，浏览器默认动作将不会被触发，只会触发你绑定的动作。

</pre>

<button id="old">.trigger("focus")</button>
<button id="new">.triggerHandler("focus")</button><br/><br/>
<input type="text" value="To Be Focused"/>

<script type="text/javascript" src="jquery-1.7.js"></script>
<script type="text/javascript">

$("#old").click(function(){
	$("input").trigger("focus");
});

$("#new").click(function(){
	$("input").triggerHandler("focus");
});

$("input").focus(function(){
	$("<span>Focused!</span>").appendTo("body").fadeOut(1000);
});



</script>
</body>
</html>

