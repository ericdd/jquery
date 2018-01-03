<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>checkbox</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<style type="text/css">
*{list-style:none;font-size:14px;font-family:tahoma;}
.box{padding:7px;border:1px solid #ccc;background:#FFCCCC;margin:15px;width:600px;}
.hd{display:none;}
</style>
</head>
<body>

<div id="b1">
<p>is,not方法的用法</p>
<p>hidden的用法</p>
</div>


<div class="box" id="box">
<input type="checkbox" name="job" value="1" checked="checked" id=""/>
<input type="checkbox" name="job" value="2" id=""/>
<input type="checkbox" name="job" value="3" id=""/>
<input type="checkbox" name="job" value="4" checked="checked" id=""/>
<input type="checkbox" name="job" value="5" checked="checked" id=""/>
<input type="checkbox" name="job" value="6" id=""/>
<input type="checkbox" name="job" value="6" id="c6"/>
<input type="checkbox" name="job" value="7" id=""/>
<br />
</div>

<div class="box" id="box1">
<label class="lab"><input type="checkbox" class="ckb" name="cc" value="aa" id=""/>aa</label>
<label class="lab"><input type="checkbox" class="ckb" name="cc" value="bb" id=""/>bb</label>
<label class="lab"><input type="checkbox" class="ckb" name="cc" value="cc" id="" checked="checked"/>cc</label>
<label class="lab"><input type="checkbox" class="ckb" name="cc" value="dd" id=""/>dd</label>
<label class="lab hd"><input type="checkbox" class="ckb" name="cc" value="ee" />ee</label>
<label class="lab hd"><input type="checkbox" class="ckb" name="cc" value="ff" />ff</label>
</div>


<script type="text/javascript" src="jquery-1.7.js"></script>
<script type="text/javascript">
function z(id) { return document.getElementById(id)}

var ckbs =$("input[name=job]:checked");
var s2 = $("input[name=job]").not(":checked");
var hashides = $(".box").find(".lab:hidden");
var s1 = ckbs.eq(0).is(':checked');

document.write(ckbs.length + "<br />");
document.write(s2.length + "<br />");
document.write(hashides.length + "<br />");
document.write(s1 + "<br />");

$(".box").on("dblclick", function(){
var hashides = $(this).find(".lab:hidden").length;
if(hashides) {
$(this).find(".lab").show();
} else {
$(this).find(".ckb").not(":checked").parent(".lab").hide();
}
return false;
});


</script>
</body>
</html>

