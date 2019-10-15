<?php
use Slim\Factory\AppFactory;

require_once($_SERVER["DOCUMENT_ROOT"]."/socymfirstgitslim/vendor/autoload.php");

require_once($_SERVER["DOCUMENT_ROOT"]."/socymfirstgitslim/containerSetups.php");
$app = AppFactory::create();
require_once($_SERVER["DOCUMENT_ROOT"]."/socymfirstgitslim/routes.php");
$app->run();
