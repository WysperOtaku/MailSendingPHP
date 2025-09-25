<?php
$documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$dir = str_replace('\\', '/', __DIR__);

$basePath = str_replace($documentRoot, '', $dir);
$host = $_SERVER["HTTP_HOST"];
define('BASE_URL', "http://$host$basePath/");
?>