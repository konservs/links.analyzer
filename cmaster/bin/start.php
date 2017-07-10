#!/usr/bin/env php
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '_init.php';
use Brilliant\Log\BLog;
use Brilliant\Log\BLoggerConsole;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

//
BLog::RegisterLogger(new BLoggerConsole());
BLog::addtolog('Starting');


$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();


$channel->queue_declare('hello', false, false, false, false);

$msg = new AMQPMessage('Hello World!');
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();
