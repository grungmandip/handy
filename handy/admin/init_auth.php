<?php

//
require_once( __DIR__ . '/../init.php');
require_once( __DIR__ . '/../config/admin/db.php');
// アクセス制御：ログインしてなければ入れない
if ( false === isset($_SESSION['admin_auth']) ) {
    // XXX エラーメッセージ
    header('Location: ./index.php');
    exit;
}