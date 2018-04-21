<?php

require 'vendor/autoload.php';

use App\User;
use App\Client;
use App\Controllers\HomeController;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

echo "<pre>";

$user = new User();
$user->show();

$client = new Client();
$client->show();

$crtl = new HomeController();
$crtl->index();

echo "</pre>";



// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('storage/logs/wow.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');