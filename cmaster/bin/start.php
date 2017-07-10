#!/usr/bin/env php
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '_init.php';
use Brilliant\Log\BLog;
use Brilliant\Log\BLoggerConsole;

BLog::RegisterLogger(new BLoggerConsole());

BLog::addtolog('Starting');