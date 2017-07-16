<?php
session_start();
require("./inc/mysql_connect.php");
if (empty($_SESSION["user_name"]))
{
	echo"<script>alert('留言请先登录');location.href='index.php'</script>";
	exit;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>用户留言</title>
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    .get {
      background: #1E5B94;
      color: #fff;
      text-align: center;
      padding: 100px 0;
    }

    .get-title {
      font-size: 200%;
      border: 2px solid #fff;
      padding: 20px;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }

    .detail {
      background: #fff;
    }

    .detail-h2 {
      text-align: center;
      font-size: 150%;
      margin: 40px 0;
    }

    .detail-h3 {
      color: #1f8dd6;
    }

    .detail-p {
      color: #7f8c8d;
    }

    .detail-mb {
      margin-bottom: 30px;
    }

    .hope {
      background: #0bb59b;
      padding: 50px 0;
    }

    .hope-img {
      text-align: center;
    }

    .hope-hr {
      border-color: #149C88;
    }

    .hope-title {
      font-size: 140%;
    }

    .about {
      background: #fff;
      padding: 40px 0;
      color: #7f8c8d;
    }

    .about-color {
      color: #34495e;
    }

    .about-title {
      font-size: 180%;
      padding: 30px 0 50px 0;
      text-align: center;
    }

    .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
      background: #2d3e50;
    }
  </style>
  <style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>

<body>
        <?php		include "head.php" ?>
<div align="center">
  <table width="706" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">

		  <br>
          <form name="form1" method="post" action="lword_save.php">
            <table width="532" border="0" class="table_small">
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4" class="text_title"><div align="left">给管理员留言</div></td>
              </tr>
              <tr>
                <td colspan="4" class="table_title">&nbsp;</td>
              </tr>
              <tr class="text">
                <td width="80" class="text"><div align="left">标题：                </div></td>
                <td colspan="3" class="text"><div align="left">
                  <input name="title" type="text" class="textfield" id="title">
                </div></td>
              </tr>
              <tr class="text">
                <td valign="top" class="text"><div align="left">内容：                  </div></td>
                <td colspan="3" valign="top"><div align="left">
                  <textarea name="word" class="textfield2" id="word"></textarea>
</div></td>
              </tr>
              <tr>
                <td colspan="4" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="58">&nbsp;</td>
                <td width="51"><input name="lword" type="submit" class="button_" id="lword" value="留言"></td>
                <td width="361"><div align="left">
                  <input name="reset" type="reset" class="button_" id="reset" value="清空">
                </div></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
            </table>
          </form>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
