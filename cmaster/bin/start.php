#!/usr/bin/env php
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '_init.php';
use Brilliant\Log\BLog;
use Brilliant\Log\BLoggerConsole;
use Brilliant\Query\BAMQP;
use Brilliant\Query\BAMQPMessage;

//
BLog::RegisterLogger(new BLoggerConsole());
BLog::addtolog('Starting');


$bampq = BAMQP::getInstanceAndConnect();
$channel = $bampq->channel();
$channel->queue_declare('hello', false, false, false, false);

$msg = new BAMQPMessage('Hello World!');
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();
