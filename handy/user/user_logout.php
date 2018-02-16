<?php

require_once( __DIR__ . '/../init.php');

//unsetting session information
unset($_SESSION['admin_auth']['user_id']);

//taking back to index
header('Location: ./index.php');