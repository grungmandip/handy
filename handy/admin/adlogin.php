<?php
//Common error handling
function error() {
   header('Location: index.php');
   exit;
}
//authenticating
require_once( __DIR__ . '/../init.php');
//
require_once( __DIR__ . '/../config/admin/db.php');
//getting id and password from screen
$id = (string)@$_POST['id'];
$pw = (string)@$_POST['pw'];
//var_dump($id, $pw);
//validating
if ( ('' === $id)||('' === $pw)) {
	error();
}
//getting id and password from DB
//handling DB
$dbh = get_dbh();
//var_dump($dbh);
//preparing statement
$sql = 'SELECT * FROM admin_users WHERE admin_user_id=:admin_user_id';
$pre = $dbh->prepare($sql);

//binding
$pre->bindValue(':admin_user_id', $id);

//running
$r = $pre->execute();
//var_dump($r);

if (false === $r) {
   echo 'Are you admin?!!!!';
   echo $pre->errorInfo();
   exit;
}

//fetching data
$admin_user = $pre->fetch(PDO::FETCH_ASSOC);
//var_dump($admin_user);
if (false === $admin_user) {
   error();
}

//checking id and password match
$r = password_verify($pw, $admin_user['password']);

if (false === $r) {
   error();
}

//if matched----Prepare for authorization
session_regenerate_id(true);//Vulnerability countermeasure,next-turn important
$_SESSION['admin_auth']['admin_user_id'] = $id;

echo 'auth ok';

//after login
header('Location: top.php');

?>