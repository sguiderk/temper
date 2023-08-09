<?php

use TemperApp\Controllers\ParkingController;
use TemperApp\Db\FactoryDB;
use TemperApp\Repository\ParkingRepository;

require "../bootstrap.php";

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

// the product id is, of course, optional and must be a number:
$productId = 0;
$name  = '';
if (isset($uri[3])) {
  $productId = (int) $uri[3];
}
if (isset($_GET['title'])) {
  $name = $_GET['title'];
}

$requestMethod = $_SERVER["REQUEST_METHOD"];


$factoryDB = new FactoryDB();
$productRepository = new ParkingRepository($factoryDB);

// pass the request method and user ID to the UserController and process the HTTP request:
$controller = new ParkingController($productRepository, $requestMethod, $productId, $name);
$controller->processRequest();
