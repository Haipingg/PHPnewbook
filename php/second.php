<?php
	session_start();
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../CSS/css1.css" rel="stylesheet">
<title>商品管理页面</title>
<style type="text/css">
.style1 {color: #FF0000}
*{ font-size:12px;}
</style>
<script>
	//删除确认
	function del()
	{
 		if(window.confirm('你是否真的要删除这条数据?'))
		{
		  return true;
		}else{
			   return false;
		     }
		
	}
</script>
</head>
<body >

<TABLE width="856" height="498" align="center" cellPadding=0 cellSpacing=0> 
    <TR> 
      <TD height="258" valign="baseline" style="BACKGROUND-IMAGE: url(images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 50px; TEXT-ALIGN: center">
         <TABLE width="856" height="419" cellPadding=0 cellSpacing=0 >
          <TR>
            <TD height="176" colspan="6" style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right">            	
            </TD>
          </TR>
          <TR>
            <TD height="214" align="center" valign="top">
              <TABLE  align="center" cellPadding=0 cellSpacing=0 >
                  <TR align="center" valign="middle">
                    <TD  style="WIDTH: 140px; COLOR: red;">当前用户:&nbsp;
                         <?php if($_SESSION['user']=="张大炮" && $_SESSION['pwd']=="123456"){echo "管理员";}
						else{echo "普通用户";}?>&nbsp;&nbsp;
                    </TD>
                    
                    <?php
					  if($_SESSION['user']=="rr" && $_SESSION['pwd']=="111")
					  {					
                         echo '<TD width="70">|&nbsp;<a href="default.php">用户管理</a></TD>';                  
					  }
					?>
                  </TR>
              </TABLE>
              
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td  height="106" background="../img/bj.jpg">&nbsp;</td>
    </tr>
	<tr>
		<td>
		<table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="images/link.jpg">
			<tr>
				<td width="188" align="center" valign="middle">
				   <b> <?php echo date("Y-m-d")." "; ?> </b>
				</td>
				<td width="98" align="center" valign="middle"><a href="second.php">浏览书本</a></td>
				<td width="100" align="center" valign="middle"><a href="addEmp.php">添加书本</a></td>
				<td width="99" align="center" valign="middle"><a href="#">简单查询</a></td>
				<td width="99" align="center" valign="middle"><a href="#">高级查询</a></td>
				<td width="100" align="center" valign="middle"><a href="#">分组统计</a></td>
				<td width="97" align="center" valign="middle"><a href="#">退出系统</a></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle">
<?php
include_once("conn.php");
?>
<table width="90%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10%" height="25" class="top" align="center">书本ID</td>
    <td width="25%" class="top" align="center">书名</td>
    <td width="10%" class="top" align="center">书价</td>
    <td width="20%" class="top" align="center">书封面</td>
  </tr>
<?php
	$pagesize = 4 ;	//每页最多显示3条记录
	
	$sqlTotal = "select book_id,book_name,book_price,book_img
	             from book";
	
	$totalQuery = mysqli_query($conn,$sqlTotal); //执行查询语句
	$totalNum   = mysqli_num_rows($totalQuery); //查询总记录数
	$pageCount  = ceil($totalNum/$pagesize);  //总页数	
	//获取当前显示页数
    (!isset($_GET['page']))?($currentPage = 1):$currentPage = $_GET['page']; 
	//当前页大于总页数时把当前页定义为总页数 (有疑问？输入大于的数字？)
	($currentPage <= $pageCount)?$currentPage:($currentPage = $pageCount);
	//当前页的第一条记录
	$f_pageNum = $pagesize * ($currentPage - 1);
	
	//定义SQL语句，通过limit关键字控制查询范围和数量
	$sqlLimit = $sqlTotal." limit ".$f_pageNum.",".$pagesize;
	
	$result = mysqli_query($conn,$sqlLimit);	
	while ($rows = mysqli_fetch_row($result))
	{
		echo "<tr>";
		for($i = 0; $i < count($rows); $i++)
		{
		  echo "<td height='25' align='center' class='m_td'>".$rows[$i]."</td>";
		}
		echo "<td class='m_td'><a href='updateEmp.php?action=update&id=".$rows[0]."'>修改</a>
		      /<a href=deleteEmp.php?action=del&book_id=".$rows[0]." onclick = 'return del();'>删除</a></td>";
		echo "</tr>";		
	}
	
	    echo "<tr>";
	    echo '<td height="25" colspan="6" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;';
		echo "共".$totalNum."个本书&nbsp;&nbsp;";
	    echo "第".$currentPage."页/共".$pageCount."页&nbsp;&nbsp;";
		if($currentPage!=1)
		{
		   //如果当前页不是1则输出有链接的首页和上一页
	       echo "<a href='?page=1'>首页</a>&nbsp;";
		   echo "<a href='?page=".($currentPage-1)."'>上一页</a>&nbsp;&nbsp;";
	    }else{
			  //否则输出没有链接的首页和上一页
	            echo "首页&nbsp;上一页&nbsp;&nbsp;";
	         }
		
		if($currentPage!=$pageCount)
		{
		  //如果当前页不是最后一页则输出有链接的下一页和尾页
	      echo "<a href='?page=".($currentPage+1)."'>下一页</a>&nbsp;";
		  echo "<a href='?page=".$pageCount."'>尾页</a>&nbsp;&nbsp;";
	    }else{
			   //否则输出没有链接的下一页和尾页
	            echo "下一页&nbsp;尾页&nbsp;&nbsp;";
	          }
?>
</table>
</td>
    </tr>
</table>
 <table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="50" background="../image/image3.jpg">&nbsp;</td>
    </tr>
</table>
            </TD>
          </TR>
      </TABLE>
      欢迎访问知书网 请在1024×768分辨率下浏览本网站&nbsp;<a href="#">注销用户</a></TD>
    </TR> 
</TABLE>
</body>
</html>










