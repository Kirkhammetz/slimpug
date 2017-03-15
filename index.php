<?php
error_reporting(-1);
ini_set('display_errors', 1);
require './vendor/autoload.php';

$app = new \Slim\App();

require 'router.php';

$app->run();
