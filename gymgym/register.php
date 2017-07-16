<?php
session_start();
require("./inc/mysql_connect.php");

?>
<html>
<head lang="en">
  <meta charset="gb2312">
  <title>注册</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
  <script language="JavaScript" type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>
<body>
<script>
function check_form()
{

	var name = document.getElementById("name");
	var psw = document.getElementById("psw");
	var psw2 = document.getElementById("psw2");
	var sex = document.getElementById("sex");
	var email = document.getElementById("email");
	var tel = document.getElementById("tel");
if(name.value == "")
	{
		alert("姓名不能为空");
		name.focus();
		return false;
	}
if(psw.value == "")
	{
		alert("密码不能为空");
		psw.focus();
		return false;
	}
	if(psw.value.length<=5)
	{
		alert("密码必须大于六位");
		psw.focus();
		return false;
	}
	if(psw2.value == "")
	{
		alert("重复密码不能为空");
		psw2.focus();
		return false;
	}

	if(psw2.value != psw.value)
	{
		alert("2次密码不一致");
		psw2.focus();
		return false;
	}
	if(email.value == "")
	{
		alert("email不能为空");
		email.focus();
		return false;
	}
	if(tel.value == "")
	{
		alert("电话不能为空");
		tel.focus();
		return false;
	}
document.form1.submit();

}
</script>
<div class="header">
  <div class="am-g">
    <h1>体育馆预订系统</h1>
    <p>welcome<br/>查询，预订场馆</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>注册</h3>
    <hr>
    <br>
    <br>

    <form name="form1" method="post" action="reg_save.php" class="am-form" onsubmit="check_form();return false;">
      <label for="user_name1">用户名:</label>
      <input type="text" name="name" id="name" value="">
      <br>
      <label for="password">密 码:</label>
      <input type="password" name="psw" id="psw" value="">
      <br>
      <label for="password">重新输入密码:</label>
      <input type="password" name="psw2" id="psw2" value="">
      <br>
      <label for="sex">性别：</label>
      <select name="sex" id="sex" >
                    <option selected>男</option>
                    <option>女</option>
                </select>
      <br>
      <label for="email">电子邮件：</label>
      <input name="email" type="text" id="email">
      <br>
      <label for="tel">电话：</label>
       <input name="tel" type="text" >
      <br />
      <div class="am-cf">
      <input name="reg" type="submit" value="注册"> 
      </div>
    </form>
    <hr>
  </div>
</div>
</body>
</html>

