<?php
error_reporting(E_ALL ^ E_NOTICE);//����������
//�Զ������ݿ����Ӻ���
function mysql_connect_db()
{
$mysql_server_name='localhost'; //���ݿ������
$mysql_username='root'; //���ݿ��û���
$mysql_password='123'; //���ݿ�����
$mysql_database='gym'; //���ݿ���
$conn=@mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("���ݿ�����ʧ��");
mysql_query("set names gbk");
mysql_select_db($mysql_database,$conn);
return $conn;

}
mysql_connect_db();//;���ú��������ݿ�����
//��ȡ��һ����¼
function getfirst($sql)
{
	$res=mysql_query($sql);
	$rows=mysql_fetch_array($res);
	return $rows;
}
//��������Ŀ¼
function Remkdir($path) {
	if (!file_exists($path)) {
		Remkdir(dirname($path));
		@mkdir($path, 0777);
	}
}
//��ȡ�ļ���׺��
function get_extend($file_name)
{
$extend = pathinfo($file_name);
$extend = strtolower($extend["extension"]);
return $extend;
}
//�ļ��ϴ�ʵ��

function upload_file($inputname, $file=null)
{
	$year = date('Y'); $day = date('md');
	$z = $_FILES[$inputname];
	//print_r($z);
	//exit;
	if($file==null)
	{

	$file_ext=get_extend($z['name']);
//echo $file_ext;
//exit;

	}
	$n = time().rand(1000,9999).".".$file_ext;
	if ($z &&  $z['error']==0) {
		if (!$file) {
			Remkdir( File_ROOT . '/' . "{$year}/{$day}" );
			$file = "{$year}/{$day}/{$n}";
			$path = File_ROOT . '/' . $file;

		} else {
			Remkdir( dirname(File_ROOT.'/' .$file) );
			$path = File_ROOT . '/' .$file;
		}
//echo $path ;


			move_uploaded_file($z['tmp_name'], $path);

		//echo $file;exit;
		return $file;
	}
	return $file;
}
//��ҳ����.
function get_pager($url, $param, $count, $page = 1, $size = 10)
{
    $size = intval($size);
    if($size < 1)$size = 10;
    $page = intval($page);
    if($page < 1)$page = 1;
    $count = intval($count);

    $page_count = $count > 0 ? intval(ceil($count / $size)) : 1;
    if ($page > $page_count)$page = $page_count;

    $page_prev  = ($page > 1) ? $page - 1 : 1;
    $page_next  = ($page < $page_count) ? $page + 1 : $page_count;

    $param_url = '?';
    foreach ($param as $key => $value)$param_url .= $key . '=' . $value . '&';

    $pager['url']        = $url;
    $pager['start']      = ($page-1) * $size;
    $pager['page']       = $page;
    $pager['size']       = $size;
    $pager['count']		 = $count;
    $pager['page_count'] = $page_count;

	if($page_count <= '1')
	{
	    $pager['first'] = $pager['prev']  = $pager['next']  = $pager['last']  = '';
	}
	else
	{
		if($page == $page_count)
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = '';
			$pager['last']  = '';
		}
		elseif($page_prev == '1' && $page == '1')
		{
			$pager['first'] = '';
			$pager['prev']  = '';
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
		else
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
	}
    return $pager;
}
@extract($_POST);
@extract($_GET);
?>