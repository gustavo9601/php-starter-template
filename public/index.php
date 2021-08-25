<?php

namespace App;
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\Controller;

$oneController = new Controller();
echo $oneController->toUppercaseFirst('cool!');