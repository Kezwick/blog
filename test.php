<?php
namespace Core;

use Controller ;


require 'vendor/autoload.php';
require_once './config/db.php';
require_once("./vendor/j4mie/idiorm.php");

ORM::configure('mysql:host=localhost;dbname=my_database');
ORM::configure('username', 'database_user');
ORM::configure('password', 'top_secret');

$test = new \Core\Controller();

echo $test->index();