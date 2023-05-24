<?php
require './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

ob_start();
require('index.php');
$page = ob_get_contents();
ob_end_clean();
$path = "public/index.html";
file_put_contents($path, $page);

ob_start();
require('about.php');
$page = ob_get_contents();
ob_end_clean();
$path = "public/about.html";
file_put_contents($path, $page);
