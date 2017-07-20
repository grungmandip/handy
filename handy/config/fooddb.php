<?php

require_once('db_config.php');

function get_fooddb() {
   //logic for twice connection
   static $fooddb = NULL;
   if (NULL !== $fooddb) {
       return $fooddb;
   }

   $db_config = db_config();
   //database setting
   $user = $db_config['user'];
   $pass = $db_config['pass'];
   $dsn = "mysql:dbname={$db_config['database']};host={$db_config['host']};charset={$db_config['charset']}";

//connection setting
$opt = array (
    PDO::ATTR_EMULATE_PREPARES => false,
);

//for sequrity
if (defined('PDO::MYSQL_ATTR_MULTI_STATEMENTS')) {
    $opt[PDO::MYSQL_ATTR_MULTI_STATEMENTS] = false;
}

//connection
try {
    $fooddb = new PDO($dsn, $user, $pass, $opt);
    } catch (PDOException $e) {
       //showing error in goodway
       echo 'システムエラー...';
       exit;
    }
    return $fooddb;
}