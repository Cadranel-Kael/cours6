<?php

define('BASE_PATH', __DIR__ . '/../');
require BASE_PATH . 'utils/functions.php';
require base_path('vendor/autoload.php');
define('VIEWS_PATH', base_path('views/'));
define('CONTROLLERS_PATH', base_path('controllers/'));
define('STYLES_CONFIG', require base_path('config/styles.php'));
define('ENV_FILE', base_path('env.local.ini'));


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require base_path('router.php');

routeToController($path);