<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>更新数据</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<center>
  <table width="797" height="108" border="0" cellpadding="0" cellspacing="0"  background="../image/image2.jpg">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
	<table width="797" height="40" border="0" cellpadding="0" cellspacing="0" background="../images/link.jpg">
    <tr>
      <td width="188" align="center" valign="middle">
		   <b> <?php echo date("Y-m-d")." "; ?> </b>
	  </td>
      <td width="98" align="center" valign="middle"><a href="second.php">浏览图书</a></td>
	  <td width="100" align="center" valign="middle"><a href="addEmp.php">添加图书</a></td>
      <td width="99" align="center" valign="middle"><a href="#">简单查询</a></td>
      <td width="99" align="center" valign="middle"><a href="#">高级查询</a></td>
      <td width="100" align="center" valign="middle"><a href="#">分组统计</a></td>
      <td width="97" align="center" valign="middle"><a href="#">退出系统</a></td>
    </tr>
  </table>
<?php
    include_once("conn.php");//包含数据库连接文件
  	if($_GET['action'] == "update")
	{
		//判断地址栏参数action的值是否等于update
		$sqlstr = "select book_id,book_name,book_price,book_img
	             from book
				 where  book_id =".$_GET['id'];//定义查询语句
		$result = mysqli_query($conn,$sqlstr);//执行查询语句
		$rows = mysqli_fetch_row($result);//将查询结果返回为数组
?>
	  <form name="intFrom" method="post" action="updateAction.php">
		<table width="765" height="200"  border="0" cellpadding="0" cellspacing="0">
          <tr align="center" valign="middle">
		  <td width="30%" class="c_td">&nbsp;</td>
            <td width="10%" align="right" class="c_td">&nbsp;</td>
            <td width="30%" class="c_td">&nbsp;</td>
			<td width="30%" class="c_td">&nbsp;</td>
          </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">书名</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="empName" value="<?php echo $rows[1] ?>"></td>
			<td class="c_td">&nbsp;</td>
          </tr>
         
           <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">书价</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="mz" value="<?php echo $rows[2] ?>"></td>
			<td class="c_td">&nbsp;</td>
          </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">书封面图片</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="dj" value="<?php echo $rows[3] ?>"></td>
			<td class="c_td">&nbsp;</td>
          </tr>       
		  <tr align="center" valign="middle">
		  <td class="c_td">&nbsp;</td>
            <td colspan="2" class="c_td">
			<input type="hidden" name="action" value="update">
			<input type="hidden" name="book_id" value="<?php echo $rows[0] ?>">
			<input type="submit" name="Submit" value="修改">
              <input type="reset" name="reset" value="重置"></td>
           <td class="c_td">&nbsp;</td>
	      </tr>
        </table>
      </form>
<?php
	}
?>



	</td></tr>
</table>
<table width="797" height="48" border="0" cellpadding="0" cellspacing="0" background="../image/image3.jpg">
	<tr><td>&nbsp;</td></tr>
</table>
</center>
</body>
</html>

