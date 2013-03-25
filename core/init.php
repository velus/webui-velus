<?php
//starts the session
session_start();
//turns off error reporting
//error_reporting(o);
//requires the files to run like connect and users
require 'database/conect.php';
require 'functions/general.php';
require 'functions/users.php';
//veriables
if (logged_in()===true) {
    $session_user_id = $_SESSION('user_id');
    $user_data=user_data($session_user_id,'user_id', 'username', 'password', 'firts_name', 'last_name', 'enail');
}
$errors = array ();
?>
