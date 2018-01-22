
<!DOCTYPE html>
<html>
<head>
<title>网站 -- 添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<script type="text/javascript" src="jquery-1.7.js"></script>

<style type="text/css">
*{margin:0;padding:0;font-size:12px;}
#form{padding:20px;width:900px;margin:50px;}

#subform{width:90px;height:30px;line-height:30px;}
/* table */
#table{width:900px;margin:10px 0;border-collapse:collapse;}
#table td{padding:2px 10px;}
#table .td{width:100px;font-weight:bold;text-align:right;}

.ckbsbox{width:600px;padding:5px 7px;background:#FBFECA;border:1px solid #ccc;border-radius:3px;position:relative;padding-right:25px;min-height:20px;float:left;}
.lab{font-weight:normal;vertical-align:middle;margin:0 5px 5px 0;display:inline-block;padding:3px 5px;display:none;}
.ckb{margin:0 2px 0 0;vertical-align:bottom;+vertical-align:middle;}
.lab span{position:relative;top:1px;margin:0 0 0 2px;}


.btn2{cursor:pointer;font-size:20px;font-weight:bold;float:left;margin:6px 0 0 7px;}
.btn2:hover{color:blue;}


.blued{color:blue;font-weight:bold;}

</style>
</head>
<body>

<form method="get" action="" id="form">

<table id="table">
<tbody>

<tr><td class="td">程 序</td>
<td>
<div class="ckbsbox" id="ws_programmer_box">
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer2" name="ws_programmer[]" value="2" checked="checked"/>彭家杰</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer9" name="ws_programmer[]" value="9"/>黄靖</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer15" name="ws_programmer[]" value="15"/>农海燕</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer16" name="ws_programmer[]" value="16"/>夏秋俊</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer17" name="ws_programmer[]" value="17"/>梁杰海</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer18" name="ws_programmer[]" value="18"/>余润跃</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer23" name="ws_programmer[]" value="23"/>非洲刘德华</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_programmer24" name="ws_programmer[]" value="24"/>秦杰</label>
</div>
<span class="btn2">+</span>

</td></tr>

<tr><td class="td">业 务</td>
<td>
<div class="ckbsbox" id="ws_editor_box">
<label class="lab" ><input type="checkbox" class="ckb" id="ws_marketer7" name="ws_marketer[]" value="7"/>农金德</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_marketer22" name="ws_marketer[]" value="22" checked="checked"/>曹操</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_marketer27" name="ws_marketer[]" value="27"/>蒋玲玉</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_marketer28" name="ws_marketer[]" value="28"/>樊倍铭</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_marketer29" name="ws_marketer[]" value="29"/>马汗毅</label>
<label class="lab" ><input type="checkbox" class="ckb" id="ws_marketer30" name="ws_marketer[]" value="30"/>秦元付</label>
</div>
<span class="btn2">+</span>

</td></tr>


<tr><td class="td"></td><td><input type="button" id="subform" name="subform" value="确 定"/>

<span id="msg"></span>
</td></tr>

</tbody>
</table>

</form>




<script type="text/javascript">
function z(id){ return document.getElementById(id)}

z("subform").onclick = function () {

    var ids = $(".ckbsbox").find(".ckb:checked").prop("value");
    alert(ids);

//z("msg").innerHTML="正在提交……";
//z("subform").disabled=true;
//this.form.submit();

};


$(".ckbsbox .lab>.ckb:checked").parent(".lab").show();

$(".btn2").on("click", function () {

    var hashides = $(this).prev(".ckbsbox").find(".lab:hidden").length;
    if (hashides) {
        $(this).prev(".ckbsbox").find(".lab").show();
    } else {
        $(this).prev(".ckbsbox").find(".ckb").not(":checked").parent(".lab").hide();
    }
});






</script>

</body></html>