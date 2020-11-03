<?php

if (php_sapi_name() !== 'cli-server') {
    die("This is the router for PHP's built-in development webserver. See https://www.php.net/manual/en/features.commandline.webserver.php for more details.");
}

// // misconfigured server that has files ran through php first (it happens for reals...)
// if (is_file($_SERVER['DOCUMENT_ROOT'] . '/' . $_SERVER['SCRIPT_NAME']) && $_SERVER['SCRIPT_NAME'] !== '/index.php') {
// 	header('Content-Type: application/x-httpd-php');
// 	include($_SERVER['DOCUMENT_ROOT'] . '/' . $_SERVER['SCRIPT_NAME']);
//     return true;
// }

// Don't interpret public files.
if (is_file($_SERVER['DOCUMENT_ROOT'] . '/' . $_SERVER['SCRIPT_NAME'])) {
    return false;
}

$_SERVER['SCRIPT_NAME'] = '/index.php';

require __DIR__ . '/public/index.php';