<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\pageAdmin;

$app = new Slim();

$app->config('debug', true);  

// rotas 
$app->get('/', function() {
    
	$page = new Page();
	$page->setTpl("index");


});

$app->get('/admin', function() {
    
	$page = new pageAdmin();
	$page->setTpl("index");


});

// fim rotas

$app->run();

 ?>