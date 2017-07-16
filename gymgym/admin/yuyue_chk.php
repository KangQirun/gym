<?php
require("../inc/mysql_connect.php");
if($preengage_id=="")exit("非法参数");

				//'已提交preengage_id数据，开始更新预约表preengage的paid字段---------
				$date=date("Y-m-d h:i:s");
$sql="update preengage set paid=1 where preengage_id=$preengage_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('预约成功了');location.href='yuyue.php'</script>";
}
else
echo "失败了";


		 ?>
