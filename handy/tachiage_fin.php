<?php

require_once( __DIR__ . '/init.php');
//
require_once( __DIR__ . '/config/udb.php');
//header
include('library/head.php');
$params = array(
    'table_name','count'
);
$input_data = array();
foreach($params as $p) {
   $input_data[$p] =(string)@$_POST[$p];
}
//var_dump($input_data);

$error_detail = array();

//important checker
$must_params = array('table_name');
foreach($must_params as $p) {
   if (''===$input_data[$p]){
       $error_detail["error_must_{$p}"] = true;
   }
}


// Error determination
if(array() !== $error_detail) {
   //saving in session
   $_SESSION['buffer']['error_detail'] = $error_detail;
   $_SESSION['buffer']['input'] = $input_data;
   header('Location: ./tachiage.php');
   exit;
}

//saving to DB
$dbh = get_dbh();
//var_dump($dbh);
$sql = 'INSERT INTO customers(table_name, count) VALUES(:table_name, :count);';
$pre = $dbh->prepare($sql);

$pre->bindValue(':table_name', $input_data['table_name']);
$pre->bindValue(':count', $input_data['count']);
//var_dump($pre);
//running SQL
$r = $pre->execute();
//var_dump($r);

if (false === $r) {
   echo 'すみません、立ち上げできませんでした。';
   exit;
}

//show on template
error_reporting(E_ALL & ~E_NOTICE);
//$smarty_obj->display('tachiage_fin.tpl');
$smarty_obj->display('menu.tpl');
echo '立ち上げ出来ました。!!';
//footer
include('library/foot.php');
