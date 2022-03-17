
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提交订单</title>
<link rel="stylesheet" href="../CSS/css1.css" type="text/css" />
<script language="JavaScript" src="../js/pay.js">
</script>
</head>
<body>
	<div id="collect">
   <div id="collect1">
   <a id="font20">订单填写</a>
   </div>
   
   <div id="collect2">
   <table id="table2">
   <tr><td id="name">姓名：<input type="text" name="name1" id="text1" value="" /></td><td id="contact">联系方式：<input type="text1" name="contact2" id="text2" value="" /></td></tr>
   <tr><td id="mode">配送方式：</td></tr>
   <tr><td id="send"><input type="radio" name="radio1" id="send1" value="0" />配送：</td></tr>
   <tr><td id="address">地址：<input type="text" name="text3" id="address1" value="" /></td></tr>
   <tr><td id="take"><input type="radio" name="radio1" id="take1" value="1" />自取：</td></tr>
   <tr><td id="payment">支付方式：</td></tr>
   <tr><td id="payment"><input type="radio" name="radio2" id="payment1" value="0" />货到付款</td><td id="banking"><input type="radio" name="radio2" id="banking1" value="0" />网上银行</td></tr>
   <tr>
    
     <td>
       <a href="html1.html">
        <input type="submit" name="orders" id="orders" onclick="confirmOrder()"  value="确定下单" />
        </a>
     </td>
   </tr>
   </table>
   </div>
   
   </div>
   
   
  <div id="Tail">
   <p id="font5">本网站不作商业用途 | 版权所有：知书网 </p>
   
  </div>
	
	
</body>
</html>