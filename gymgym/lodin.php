<?php
session_start();
require("./inc/mysql_connect.php");

?>
<html>
<head lang="en">
  <meta charset="gb2312">
  <title>��¼</title>
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
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>������Ԥ��ϵͳ</h1>
    <p>welcome<br/>��ѯ��Ԥ������</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>��¼</h3>
    <hr>
    <br>
    <br>

    <form name="form1" method="post" action="login.php" class="am-form">
      <label for="user_name1">�û���:</label>
      <input type="user_name1" name="" id="user_name" value="">
      <br>
      <label for="password">�� ��:</label>
      <input type="password" name="psw" id="psw" value="">
      <br>
      <label for="remember-me">
        <input id="remember-me" type="checkbox">
        ��ס����
      </label>
      <br />
      <div class="am-cf">
        <input name="login" id="login" input type="submit" value="�� ¼" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
  </div>
</div>
</body>
</html>

