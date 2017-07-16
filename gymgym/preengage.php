<?php
session_start();
require("./inc/mysql_connect.php");
if (empty($_SESSION["user_name"]))
{
	echo"<script>alert('场地预约请先登录');location.href='index.php'</script>";
	exit;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>查看场馆</title>
  <SCRIPT language=javascript src="js/calendar.js"></SCRIPT>
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
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>
<?php
$sql = "select * from ground where ground_id =$ground_id";
$rs_ground=getfirst($sql);
?>
<body>
        <?php		include "head.php" ?>
<div align="center">
  <div align="center">
    <table width="960" height="281" border="0" class="table_big">
      <tr>
        <td valign="top"><div align="center">
		<br>
            <form name="form1" method="post" action="preengage_save.php">
              <table width="516" border="1" class="table_small">
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4" class="text_title"><div align="left">请补充完整您要预约的场地信息：
                    <input name="ground_id" type="hidden" id="ground_id" value="<?php echo $ground_id?>">
                  </div></td>
                </tr>
                <tr>
                  <td colspan="4" class="table_title">&nbsp;</td>
                </tr>
                <tr>
                  <td width="60">&nbsp;</td>
                  <td colspan="2" class="text"><div align="left">场地类型：<?php echo $rs_ground["type"]?></div></td>
                  <td width="286" class="text"><div align="left">场地名称：<?php echo $rs_ground["name"]?></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3" class="text"><div align="left">租用时间：   <INPUT class=air_city_opt
                              id=StrDate
                              onclick="javascript:event.cancelBubble=true;showCalendar('StrDate',false,'StrDate','','','<?php echo date("Y-m-d")?>','2016-12-31','','','','text','')"
                              maxLength=10 value="<?php echo date("Y-m-d",strtotime("+1 day"))?>" name=StrDate>


                  <select name="ptime" id="ptime">
                    <?php
						//'显示8点到19点的时间选项-------------
						for($i=8;$i<=19;$i++)
					echo  "<option value=".$i.">".$i.":00-".($i+1).":00</option>";


					?>
                  </select>
				  </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3" class="text"><div align="left">费用（元）：<?php echo $rs_ground["cost"]?></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3" class="text"><div align="left">场地简介:<?php echo $rs_ground["content"]?></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="99">&nbsp;</td>
                  <td width="70"><input name="preengage" type="submit" class="button_" id="preengage" value="我要预约"></td>
                  <td><div align="left">
                    <input name="back" type="submit" class="button_" id="back" onClick="MM_goToURL('parent','ground.php');return document.MM_returnValue" value="放弃">
                  </div></td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3">&nbsp;</td>
                </tr>
              </table>
            </form>
        </div></td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
