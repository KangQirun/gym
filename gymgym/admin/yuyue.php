
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ԤԼȷ��</title>
<style type="text/css">
<!--
@import url("style.css");
-->
</style><SCRIPT language=javascript src="./js/calendar.js"></SCRIPT>
</head>

<body>

<div align="center">
  <table width="960" height="281" border="0" class="table_big">
    <tr>
      <td valign="top"><div align="center">
		  <?php

require("../inc/mysql_connect.php");


		  ?>
		  <br><form name="form1" method="post" action="">
                ��ʼʱ��
                <label for="s"></label>
                <INPUT id=s onclick="javascript:event.cancelBubble=true;showCalendar('s',false,'s','','','<?php echo date("Y-m-d")?>','2016-12-31','','','','text','')" size="10" value="<?php echo date("Y-m-d")?>" name=s>
              ����ʱ��
              <INPUt  id=e  onclick="javascript:event.cancelBubble=true;showCalendar('e',false,'e','','','<?php echo date("Y-m-d")?>','2016-12-31','','','','text','')" value="<?php echo date("Y-m-d",strtotime("+1 day"))?>"size="10" name=e>
              ѡ�񳡵�
              <label for="select"></label>
            <select name="select" id="select">

                <option value="">ѡ�񳡵�</option>
                	<?php
                    $sql = "select * from ground order by ground_id DESC";
$res1=mysql_query($sql);
				while($rs_ground=mysql_fetch_array($res1))
                echo "<option value=$rs_ground[ground_id]>$rs_ground[name]</option>";
				 ?>
              </select>
              <input type="submit" name="button" id="button" value="��ѯ">
		  </form>
          <table width="584" border="0" class="table_small">
            <tr>
              <td colspan="6"></td>
            </tr>
            <tr>
              <td colspan="6" class="text_title"><div align="left">ԤԼȷ��</div></td>
            </tr>
            <tr>
              <td colspan="6" class="table_title">&nbsp;</td>
            </tr>
            <tr class="text">
              <td width="86"><div align="left">ԤԼ�û�</div></td>
              <td width="125" class="text"><div align="left">��������</div></td>
              <td width="89"><div align="left">ԤԼ����</div></td>
              <td width="89"><div align="left">ԤԼʱ��</div></td>
              <td width="61"><div align="left">����</div></td>
              <td width="104"><div align="left">����</div></td>
            </tr>
			<?php
		$where=" where 1=1";
		if($s!="" and $e!="")
		{
			$s1=strtotime($s);
			$e1=strtotime($e);
		$where.=" and pdate>=$s1 and pdate<=$e1";
		}
		if($select!="")
		$where.=" and ground_id=$select";
				$sql = "select * from preengage $where ";
$res=mysql_query($sql);
	while($rs_preengage=mysql_fetch_array($res))

			{
				?>
            <tr class="text">
              <td><div align="left"><?php echo $rs_preengage["user_name"]?></div></td>
              <td class="text">
			    <div align="left">
			      <?php
				$sql = "select * from ground where ground_id=$rs_preengage[ground_id]";
				$rs_ground=getfirst($sql);
				echo $rs_ground["name"];

			  ?>
			      </div></td>
              <td><div align="left"><?php echo date("Y-m-d",$rs_preengage["pdate"])?></div></td>
              <td><div align="left"><?php echo $rs_preengage["beginhour"]. ":00-" . ($rs_preengage["beginhour"]+1) .":00" ?></div></td>
              <td><div align="left"><?php echo $rs_preengage["cost"]?></div></td>
              <td><div align="left"><?php
				  if($rs_preengage[paid]==0)
				{
				  ?>
				  [<a href="yuyue_chk.php?preengage_id=<?php echo $rs_preengage["preengage_id"]?>">ȷ��ԤԼ</a>]
<?php
				}else
					  echo "�Ѿ�ȷ��";
			  ?>
			  [<a href="chkcancel.php?preengage_id=<?php echo $rs_preengage["preengage_id"]?>">ɾ��</a>]</div></td>
            </tr>
			<?php
		}
			?>
            <tr>
              <td colspan="6">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="6">&nbsp;</td>
            </tr>
          </table>


		  <br>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
