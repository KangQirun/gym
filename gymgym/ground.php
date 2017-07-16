<?php
session_start();
require("./inc/mysql_connect.php");//调用mysql_connect

?>
<html>
<head lang="en">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="gb2312">
  <title>查看场馆</title>
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
  <table width="760" height="242" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">

	  <br>
        <table width="549" border="0" class="table_small">
          <tr class="text_title">
            <td colspan="5">&nbsp;</td>
            </tr>
          <tr class="text_title">
            <td width="73"><div align="left">场地序号</div></td>
            <td width="114"><div align="left">场地名称</div></td>
            <td width="61"><div align="left">场地类型</div></td>
            <td width="88"><div align="left">费用（元）</div></td>
            <td width="127"><div align="left">操作</div></td>
          </tr>
          <tr>
            <td colspan="5" class="table_title">&nbsp;</td>
          </tr>
		  <?php

			$sql = "select * from ground order by ground_id DESC";
$res=mysql_query($sql);
		  	//循环显示场地信息-----------------
				while($rs_ground=mysql_fetch_array($res))
				{
		  ?>
          <tr>
            <td class="text"><div align="left"><?php echo $rs_ground["ground_id"]?></div></td>
            <td class="text"><div align="left"><?php echo $rs_ground["name"]?></div></td>
            <td class="text"><div align="left"><?php echo $rs_ground["type"]?></div></td>
            <td class="text"><div align="left"><?php echo $rs_ground["cost"]?></div></td>
            <td class="text"><div align="left">
			<a href="preengage.php?ground_id=<?php echo $rs_ground["ground_id"]?>">我要预约</a><!--不懂啊-->
			</div></td>
          </tr>
		  <?php
				}
			  ?>
          <tr>
            <td colspan="5" class="text">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="5" class="text_error"><div align="left">
              <blockquote>
                <p>●点击我要预约操作即可进行场地预约</p>
              </blockquote><!--增加外边距-->
            </div></td>
          </tr>
          <tr>
            <td colspan="5" class="text">&nbsp;</td>
          </tr>
        </table>

      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
