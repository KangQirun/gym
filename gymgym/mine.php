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
  <title>我的预约</title>
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
<?php
$user_name=$_SESSION["user_name"];
$sql ="select * from preengage where user_name='$user_name'";

$res=mysql_query($sql);
?>
<body>
  <?php		include "head.php" ?>
<div align="center">
  <table width="706" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">
          <br>
          <table width="605" border="0" class="table_small">
            <tr>
              <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="7" class="text_title"><div align="left">我的预约信息</div></td>
            </tr>
            <tr>
              <td colspan="7" class="table_title">&nbsp;</td>
            </tr>

            <tr class="text">
              <td width="105"><div align="left">场地名称</div></td>
              <td width="68"><div align="left">场地类型</div></td>
              <td width="50"><div align="left">费用</div></td>
              <td width="100"><div align="left">预约日期</div></td>
              <td width="86"><div align="left">预约时间</div></td>
              <td width="117"><div align="left">状态</div></td>
              <td width="80">操作</td>
            </tr>
			<?php
				while ($rs_preengage=mysql_fetch_array($res))
				{
				$sql = "select * from ground where ground_id=$rs_preengage[ground_id]";
				$rs_ground=getfirst($sql);
			?>
            <tr class="text">
              <td><div align="left"><?php echo $rs_ground["name"]?></div></td>
              <td><div align="left"><?php echo $rs_ground["type"]?></div></td>
              <td><div align="left"><?php echo $rs_preengage["cost"]?></div></td>
              <td><div align="left"><?php echo date("Y-m-d",$rs_preengage["pdate"])?></div></td>
              <td><div align="left"><?php echo $rs_preengage["beginhour"].":00-".($rs_preengage["beginhour"]+1).":00";?></div></td>
              <td><div align="left">
			 <?php
			 	//根据paid字段判断是否付款--------------------
				If ($rs_preengage["paid"]==1)
					echo("已经付款");
				else
					echo("尚未付款");
echo "<br>";
				//根据日期判断预约是否过期---------------------
				$nowtime=date("Y-m-d H:i:s");
		$StrDate=date("Y-m-d",$rs_preengage["pdate"])." ".$rs_preengage[beginhour].":00:00";
//echo $StrDate;
//echo "<br>".strtotime($StrDate)."<br>";
				$time_out=strtotime($nowtime)-strtotime($StrDate);
				//echo $time_out;
				if  ($time_out > 0)
					echo("已经过期");
				else
					echo("尚未到期");

			 ?>
			  </div></td>
              <td>
			  <?php if ($rs_preengage["paid"]==0 and $time_out < 0)
			  {
			  ?>
			  <a href="cancel.php?preengage_id=<?php echo $rs_preengage["preengage_id"]?>">取消预约</a>
			  <?php
			  }
				  ?>
			  </td>
            </tr>
			<?php
			}
			?>
            <tr>
              <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="7" class="text"><div align="center">[<a href="index.php">返回首页</a>]</div></td>
            </tr>
            <tr>
              <td colspan="7">&nbsp;</td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
