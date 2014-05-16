<?php
date_default_timezone_set('America/New_York');
session_start();
$basr_dir = '/Users/jason/code/AppFramework/';    
require_once $basr_dir . 'config.php';
require_once $basr_dir . 'lib/functions.php';
require_once $basr_dir . 'lib/App.php';
require_once $basr_dir . 'lib/DB.php';
require_once $basr_dir . 'lib/Validate.php';

$app = new Application();
$app->set('colors', $colors);
$app->config('title_separator', " | ");
$app->config('title', "App Title");
$app->header_nav('Home', '/prototypes/index.php');
if($_SERVER['SCRIPT_NAME'] != '/prototypes/index.php'){
    $app->crumb("Home", '/prototypes/index.php');   
}
?>

