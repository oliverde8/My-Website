<?php

	define('OWEB_DEFAULT_PAGE','articles\home');
	define('OWEB_DIR_PAGES', "pages");
	define('OWEB_DIR_FAPI', "fapi");

	define('OWEB_HTML_DIR_CSS','src/css');
	define('OWEB_HTML_DIR_JS','src/js');
	define('OWEB_DIR_DATA','../www_oliverde8_files/data');
	define('OWEB_WWW_DATA','http://files.oliver-decramer.com/data');
	define('OWEB_HTML_URL_IMG','http://files.oliver-decramer.com/web/img');
	
    require_once '../OWeb_src/OWeb/OWeb.php';
	if(!isset($_SERVER['REMOTE_ADDR']))$_SERVER['REMOTE_ADDR']="";

    $Oweb = new OWeb\Oweb($_GET, $_POST, $_FILES, $_COOKIE, $_SERVER, $_SERVER['REMOTE_ADDR']);


    $Oweb->init();

    $Oweb->display();

    //new \OWeb\types\TemporaryData("test","test");
?>
