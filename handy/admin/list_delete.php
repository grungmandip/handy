<?php

require_once( __DIR__ . '/init_auth.php');

$dbh = get_dbh();

//削除ステートメント
$sql = 'DELETE FROM customers where customer_id=?';
$pre = $dbh->prepare($sql);
$r = $pre->execute();

$smarty_obj->assign('list_delete', $delete);

// 表示する
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/tachiage_list.tpl');
?>



~
~
