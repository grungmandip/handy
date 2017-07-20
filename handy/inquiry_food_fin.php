<?php

require_once( __DIR__ . '/init.php');


//
require_once( __DIR__ . '/config/fooddb.php');

$params = array(
    'name','change'
);
$input_data = array();
foreach($params as $p) {
   $input_data[$p] =(string)@$_POST[$p];
}
var_dump($input_data);

$error_detail = array();

//important checker
$must_params = array('name');
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
   header('Location: ./inquiry_food.php');
   exit;
}

//saving to DB
$fooddb = get_fooddb();

$sql = 'INSERT INTO foods(name) VALUES(:name);';
$pre = $fooddb->prepare($sql);

//binding
$pre->bindValue(':name', $input_data['name']);

//running SQL
$r = $pre->execute();
var_dump($r);

if (false === $r) {
   echo 'すみません、データ保存できませんでした。';
   exit;
}

//show on template
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('inquiry_food_fin.tpl');
echo 'フードの追加出来ました。!!';
?>