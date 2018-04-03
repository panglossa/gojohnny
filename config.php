<?php
/*
	This file is for configuring application settings.
	Options for the go!Johnny class library should be set in the gojohnny_config.php file.

	"$this" here refers to the TConfig class object. After loading these data it will create a member variable referencing each of these keys, so, for instance, for the key 'title' there will be a variable $this->title referencing it, and so on.

	Values indicated here will be overridden by those found in the `config` database table.

	*/
///////////////////////////////////////////////////////////////
/*
	Settings which depend on the current server.
	*/
//assuming WAMP/LAMP in localhost:
$this->data = array(
	/*
	General Settings
	*/
	'gojohnny' => './',/* REQUIRED!!! */
	/*
	Database access:
	*/
	'db_mode' => 'sqlite',
	'db_host' => 'localhost',
	'db_user' => 'root',
	'db_password' => '',
	'db_port' => '3306',
	'db_database' => 'gojohnny.sqlite'
	);
///////////////////////////////////////////////////////////////
/*
	Settings common to all environments
	*/
$this->data['title'] = 'goJohnny PHP Library v. 8.0';
$this->data['version'] = '8.0';
$this->data['css'] = array(
	'./lib/blueprint/print.css',
	/*
	//You can change this if you want to use bootstrap instead:
	'./lib/bootstrap-3.3.7-dist/css/bootstrap.min.css',
	'./lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css',
	*/
	'./lib/jquery-ui-1.12.1/jquery-ui.css',
	'./gojohnny.css'
	);
$this->data['js'] = array(
	'./lib/jquery/jquery-3.2.1.min.js',
	/*
	//Add this if you want to use bootstrap:
	'./lib/bootstrap-3.3.7-dist/js/bootstrap.min.js',
	*/
	'./lib/jquery-ui-1.12.1/jquery-ui.js',
	'gojohnny.js'
	);
$this->data['icon'] = 'media/gj_32.ico';
$this->data['lastupdate'] = '2017-07-06 12:12:22';
$this->data['server'] = $_SERVER['SERVER_SOFTWARE'];
$this->data['phpversion'] = phpversion();
$this->data['startmodule'] = 'home';
///////////////////////////////////////////////////////////////
?>
