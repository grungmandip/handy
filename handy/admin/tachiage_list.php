<?php

require_once( __DIR__ . '/init_auth.php');
include('../library/head.php');

$page_num = abs((int)@$_GET['p']);
$per_page = 10;
$sort = (string)@$_GET['sort'];
//var_dump($sort);

$sort_white_list = [
	'id' => 'customer_id',
	'id_desc' => 'customer_id DESC',
	'response_date' => 'response_date',
	'response_data_desc' => 'response_data DESC',
];
if (('' === $sort) || (false === isset($sort_white_list[$sort])))
{
	$sort = 'id_desc';
}
$sort_sql_e = $sort_white_list[$sort];
$smarty_obj->assign('sort', $sort);
//var_dump($sort);
//var_dump($sort_sql_e);

//find tool
$find_string = [];
foreach(['table_name','count','createdOn'] as $p)
	{
		$find_string[$p] = (string)@$_GET[$p];
	}
//var_dump($find_string);
$smarty_obj->assign('find_string', $find_string);
$awk = [];
foreach ($find_string as $key => $value)
	{
		if ('' !== $find_string[$key])
		{
			$awk[] = "{$key}=" . rawurldecode($find_string[$key]);
		}
	}
//var_dump($awk);
$uri_params = implode('&', $awk);
$smarty_obj->assign('uri_params', $uri_params);

$dbh = get_dbh();
$bind_data = [];
$where_array = [];
// プリペアドステートメント
$sql = 'SELECT * FROM customers ';
$sql_count = 'SELECT count(customer_id) FROM customers';
//for table name search
if ('' !== $find_string['table_name'])
	{
		$where_array[] = 'table_name=:table_name';
		$bind_data[':table_name'] = $find_string['table_name'];
	}
//for customer count search
if ('' !== $find_string['count'])
	{
		$where_array[] = 'count=:count';
		$bind_data[':count'] = $find_string['count'];
	}
//for time search
if ('' !== $find_string['createdOn'])
	{
		$where_array[] = 'createdOn=:createdOn';
		$bind_data[':createdOn'] = $find_string['createdOn'];
	}
//
if ([] !== $where_array)
{
	$buf = ' where ' . implode(' and ', $where_array);
	$sql .= $buf;
	$sql_count .= $buf;
}
//$sql .= "ORDER BY {$sort_sql_e} LIMIT :limit_start, :limit_num ;";
$sql .= " LIMIT :limit_start, :limit_num ;";
$sql_count .= " ;";
//var_dump($sql);
//var_dump($sql_count);

//save bind data for count
$bind_data_count = $bind_data;

$bind_data[':limit_start'] = $page_num * $per_page;
$bind_data[':limit_num'] = $per_page;
$pre = $dbh->prepare($sql);
//var_dump($pre);
//var_dump($dbh->errorInfo());

foreach ($bind_data as $key => $value)
	{
		$pre->bindValue($key, $value);
	}
	//run
$r = $pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);
// テンプレートにデータを渡して
$smarty_obj->assign('tachiage_list', $data);



//bind value
$pre_count = $dbh->prepare($sql_count);
foreach ($bind_data_count as $key => $value)
	{
		$pre_count->bindValue($key, $value);
	}
$r = $pre_count->execute();
$rec_num = $pre_count->fetchAll();
$rec_num = $rec_num[0][0];
//var_dump($rec_num);
$max_page_num = ceil($rec_num / $per_page) - 1;
//var_dump($max_page_num);
//previous and next page setting
$smarty_obj->assign('next_page', $page_num + 1);
$smarty_obj->assign('back_page', $page_num - 1);

//botton controll
$smarty_obj->assign('back_page_flg', (0 === $page_num)? false : true );
$smarty_obj->assign('next_page_flg', ($page_num >= $max_page_num)? false : true );

//削除ステートメント
$id = $_POST['customer_id'];
$del_sql = 'DELETE FROM customers where customer_id=".$id."';
$del_pre = $dbh->prepare($del_sql);
$del_r = $del_pre->execute();
$smarty_obj->assign('del_id', $del_sql);
// 表示する
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/tachiage_list.tpl');
include('../library/foot.php');


