<?php

//-----------------------------CONFIG------------------------------------------

session_start();

ini_set('include_path', 'C:\\Xampp2\\htdocs\\login.php\\');

$db = new mysqli('localhost', 'root', '', 'mysqli_2');

$salt = "09.delfhkjsdfmlwsfd..324021034012041234,1234.21,34.1234.,,.231421";


require_once('functions.php');

require_once('login_logic.php');


if(check_login() == false) {

    require_once('login_markup_logged_out.php');


} else {

    require_once('login_markup_logged_in.php');

}

?>

