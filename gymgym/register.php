<?php
session_start();
require("./inc/mysql_connect.php");

?>
<html>
<head lang="en">
  <meta charset="gb2312">
  <title>ע��</title>
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
		alert("��������Ϊ��");
		name.focus();
		return false;
	}
if(psw.value == "")
	{
		alert("���벻��Ϊ��");
		psw.focus();
		return false;
	}
	if(psw.value.length<=5)
	{
		alert("������������λ");
		psw.focus();
		return false;
	}
	if(psw2.value == "")
	{
		alert("�ظ����벻��Ϊ��");
		psw2.focus();
		return false;
	}

	if(psw2.value != psw.value)
	{
		alert("2�����벻һ��");
		psw2.focus();
		return false;
	}
	if(email.value == "")
	{
		alert("email����Ϊ��");
		email.focus();
		return false;
	}
	if(tel.value == "")
	{
		alert("�绰����Ϊ��");
		tel.focus();
		return false;
	}
document.form1.submit();

}
</script>
<div class="header">
  <div class="am-g">
    <h1>������Ԥ��ϵͳ</h1>
    <p>welcome<br/>��ѯ��Ԥ������</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>ע��</h3>
    <hr>
    <br>
    <br>

    <form name="form1" method="post" action="reg_save.php" class="am-form" onsubmit="check_form();return false;">
      <label for="user_name1">�û���:</label>
      <input type="text" name="name" id="name" value="">
      <br>
      <label for="password">�� ��:</label>
      <input type="password" name="psw" id="psw" value="">
      <br>
      <label for="password">������������:</label>
      <input type="password" name="psw2" id="psw2" value="">
      <br>
      <label for="sex">�Ա�</label>
      <select name="sex" id="sex" >
                    <option selected>��</option>
                    <option>Ů</option>
                </select>
      <br>
      <label for="email">�����ʼ���</label>
      <input name="email" type="text" id="email">
      <br>
      <label for="tel">�绰��</label>
       <input name="tel" type="text" >
      <br />
      <div class="am-cf">
      <input name="reg" type="submit" value="ע��"> 
      </div>
    </form>
    <hr>
  </div>
</div>
</body>
</html>

