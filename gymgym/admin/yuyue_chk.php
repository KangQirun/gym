<?php
require("../inc/mysql_connect.php");
if($preengage_id=="")exit("�Ƿ�����");

				//'���ύpreengage_id���ݣ���ʼ����ԤԼ��preengage��paid�ֶ�---------
				$date=date("Y-m-d h:i:s");
$sql="update preengage set paid=1 where preengage_id=$preengage_id";
$res=mysql_query($sql);
if($res)
{
	echo"<script>alert('ԤԼ�ɹ���');location.href='yuyue.php'</script>";
}
else
echo "ʧ����";


		 ?>
