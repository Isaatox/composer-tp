<?php
require_once '../vendor/autoload.php';
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
$logger = new Logger('main');
$logger->pushHandler(new StreamHandler(__DIR__ . '/../log/app.log', Logger::DEBUG));
$logger->info('First message');
print('Le message est enregistré dans le fichier ' . __DIR__ . '/../log/app.log');