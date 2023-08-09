<?php


require 'vendor/autoload.php';

use TemperApp\Db\FactoryDB;

$dbConnection = (new FactoryDB())->connect();

