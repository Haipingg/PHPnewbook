<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户登录</title>

</head>
<body style="height:100% ">

<script language="javascript">

	function check(form)
	{
		if(form.user.value==null)
		{
			alert("请输入用户名");
			form.user.focus();
			return false;		
		}
		if(form.pwd.value==null)
		{
			alert("请输入密码");
			form.pwd.focus();
			return false;
		}
		form.submit();
	}
</script>

<form name="form1" method="post" action="third.php">
  <table width="100%"  style="height: 800px"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="file:///D|/PHPdaima/img/../img/bg.jpg" >
         <table width="520" style="height: 200px" align="center" border="0" cellspacing="0" cellpadding="0">

          <tr style="height: 80px">
            <td  align="right" style="color: white;height: 80px;font-size: 30px">用户名：</td>
            <td style="height: 40px" align="left"><input style="height: 30px" name="user" type="text" id="user" size="45"></td>
          </tr>
          <tr style="height: 80px">
            <td height="80" align="right" style="color: white;font-size: 30px">密&nbsp;&nbsp;码：</td>
            <td height="80" align="left"><input style="height: 30px" name="pwd" type="password" id="pwd" size="20"></td>
          </tr>
          <tr align="center">
            <td height="80" colspan="2">
                 <input  type="submit" name="Submit" value="提交" onClick="return check(form);">
                &nbsp;&nbsp;
                 <input type="reset" name="Submit2" value="重填">
            </td>
          </tr>

  </table>
</form>
</body>
</html>