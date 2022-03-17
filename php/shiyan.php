<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>知书网</title>
<link rel="stylesheet" href="../CSS/shiyan.css" type="text/css" />
<script type="text/javascript">
    function nextSlide() {
    if (typeof $ == "undefined") var $ = function(sel) { return document.querySelector(sel); }  
    $(".slides").appendChild($(".slides img:first-child"));
}
setInterval(nextSlide, 3000)
    </script>
    <style type="text/css">
    img{
        width: 1049px;
        height: 400px;
		margin: 0px;
		padding: 0px;
    }
.slides {
  box-shadow: 0px 5px 6px black;
  margin: 0px;
  padding: 0px 300px;
  height: 400px;
  overflow: hidden;
}
 
.slides img {
	position: absolute;
	transition: opacity 1s;
	opacity: 0;
	top: 57px;
	left: 149px;
}
 
.slides img:first-child { 
  z-index: 0;
  opacity: 1;
}
 
.slides img:last-child {
  z-index: -1;
  opacity: 1;
}
	</style>
</head>

<body>
<div id='boxes'>
	
	<div id='top'>
		<div id='titlel'>
			
			
			<a href="#">知书</a>
		</div>
		<div id='titlel-small'>学如逆水行舟，不进则退</div>
		<div id='titler'>
			<div><a href="#">知书达理</a></a></div>
		</div>
		
	</div>
	<div class="slides">
	
		    <img src="../img/top.jpg">
			<img src="../img/top1.jpg">
			 </div>
		
		
  <div id='sel'>
		
		<div id='list-bg'>
				<div id='list-title'>全部商品</div>
		</div>
	
	<dl id='right'>
<?php
include_once('conn.php');	
$str="select*from book";
$result=mysqli_query($conn,$str);
while($row=mysqli_fetch_row($result)){
?>
<dd class='put'>
<?php	
	if(!isset($row[3])||trim($row[3])==''){
		?>
			<dl class='put-image'><img src="../img/ts1.jpg"></dl>
				
<?php		
	}
	else {
		?>
		<dl class='put-image'><img src="../img/ts1.jpg<?php echo $row[3] ?>"></dl>
<?php		
	}
	?>
	<dl class='put-text'>
		<?php echo $row[3].' '.$row[1].'</br>';
		?>
		<dt class='put-money'>￥<?php echo $row[2]?></dt>
	</dl>
	
<?php	
		?>
		<div class='cart-on'>
		<a href='cartj.php?book_id=<?php echo $row[0];?>'>
			<div class='show'>
			加入购物车
			</div>
			</a>
		</div>
		</dd>
<?php		
}
?>
			
		</dl>
	</div>
</div>
</body>
</html>
