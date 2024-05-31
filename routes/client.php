<?php

use Admin\Base\Controller\Client\HomeController;

$router->get( '/', HomeController::class . '@index');