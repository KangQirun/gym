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
  <title>取消预约</title>
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
$sql = "select * from preengage where preengage_id=$preengage_id and user_name ='$user_name'";
$rs_cancel=getfirst($sql);
//rs_cancel.open sql,gym_conn,3,2

$sql = "select * from ground where ground_id=$rs_cancel[ground_id]";
$rs_ground=getfirst($sql);
?>
<body>  
      <?php		include "head.php";
		?>	 
<div align="center">
  <table width="706" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">
 <br>
          <form name="form1" method="post" action="chkcancel.php">
            <table width="472" border="0" class="table_small">
              <tr>
                <td colspan="5">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5" class="text_title"><div align="left">您要取消<?php echo date("Y-m-d",$rs_cancel["pdate"])?>日预约的场地：</div></td>
              </tr>
              <tr>
                <td colspan="5" class="table_title">&nbsp;</td>
              </tr>
              <tr class="text_title">
                <td width="90"><div align="left">场地名称</div></td>
                <td width="88"><div align="left">场地类型</div></td>
                <td width="129"><div align="left">预约日期</div></td>
                <td width="90"><div align="left">预约时间</div></td>
                <td width="49"><div align="left">费用</div></td>
              </tr>
              <tr class="text">
                <td><div align="left"><?php echo $rs_ground["name"]?></div></td>
                <td><div align="left"><?php echo $rs_ground["type"]?></div></td>
                <td><div align="left"><?php echo date("Y-m-d",$rs_cancel["pdate"])?></div></td>
                <td><div align="left"><?php echo $rs_cancel["beginhour"].":00-". ($rs_cancel["beginhour"]+1).":00" ?></div></td>
                <td><div align="left"><?php echo $rs_cancel["cost"]?></div></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                <td><div align="left">
                  <input name="cancel" type="submit" class="button_" id="cancel" value="取消预约">
                </div></td>
                <td colspan="2"><input name="preengage_id" type="hidden" id="preengage_id" value="<?php echo $preengage_id?>"></td>
              </tr>
              <tr>
                <td colspan="5">&nbsp;</td>
              </tr>            </table>
          </form>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>