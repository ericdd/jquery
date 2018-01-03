<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>ajax</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<script type="text/javascript" src="jquery-1.7.js"></script>
<style type="text/css">
*{list-style:none;font-size:14px;font-family:tahoma;}
#a, #b{width:600px;height:50px;background:purple;padding:10px;color:#fff;margin:10px;}
#loading{width:600px;height:50px;background:#000;padding:10px;color:#fff;margin:10px;}
</style>
</head>
<body>
<xmp>
$.ajax先执行success，再complete
</xmp>
<hr />

<div id="a">a</div>
<div id="b">b</div>
<div id="loading">loading</div>

<script type="text/javascript">

$.ajax({
type: "GET",
url: "test.php?"+Math.random(),        //改回test.php
data: {},
global:true,
dataType: "html",
async:true,
success: function(data,textStatus){
$("#a").html(data);
alert(textStatus);
},

complete: function(xhr, textStatus){
$("#b").html(xhr.readyState +","+xhr.status);
},

error:function(xhr, textStatus, errorThrown){
alert(textStatus +","+errorThrown);
}
});

$("#loading").ajaxStart(function(){
$(this).html(Math.random());
});


</script>
</body>
</html>

