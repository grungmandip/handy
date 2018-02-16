<?php

require_once( __DIR__ . '/../init.php');

//unsetting session information
unset($_SESSION['admin_auth']);

//taking back to index
header('Location: ./index.php');