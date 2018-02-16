<?php

//
require_once( __DIR__ . '/../init.php');
require_once( __DIR__ . '/../config/admin/db.php');
//check
if ( false === isset($_SESSION['admin_auth']) ) {
	// redirect
	header('Location: index.php');
	exit;
}