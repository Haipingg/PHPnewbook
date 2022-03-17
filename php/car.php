<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车</title>
<link rel="stylesheet" href="../CSS/css1.css" type="text/css" />
<style type="text/css">
a:link {
 color: hsla(107,38%,56%,1);
}
a:visited {
 color: hsla(31,75%,56%,1);
}
</style>
</head>
<body>
 <h1>查看购物车</h1>
<table width="100%" border="1"cellspacing="0" cellpadding="0">
    <tr>
        <td>商品名称</td>
        <td>商品单价</td>
        <td>商品数量</td>
        <td>商品总价格</td>
        <td>操作</td>
    </tr>

   <?php
    session_start();
    if(!empty($_SESSION["gwc"]))
    {
        $arr = array();
        $arr = $_SESSION["gwc"];
        //造数组
    }
    include_once('conn.php');
 $a=0;
 $sum=0;
    foreach ($arr as $v)
    {
        
        $sql = "select * from book WHERE book_id = '".$v[0]."'";
        $att = mysqli_query($conn,$sql);
  while($row=mysqli_fetch_row($att)){
   $a=$row[2]*$v[1];
   $sum=$sum+$row[2]*$v[1];
            echo "<tr>
        <td>{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$v[1]}</td>
        <td>{$a}</td>
        <td><a href='delete.php?book_id={$row[0]}'>删除</a> </td>
		</tr>
    ";
//            蔬果的名称
//            单价
//            取int数量
//        这个地方也可以加索引shanchu.php?sy={$v}
        }
    
 }
    ?>
</table>
<table>
 <tr>
  <td>
   商品总金额：￥
    <?php
	  printf("%0.2f",$sum);
	  ?>
   元
  </td>
 </tr>
 
</table>
<a href="clear.php" >清空购物车</ a>
<a href="tj.php">提交订单</ a>
<a href="shiyan.php">主页面</ a>
</body>
  