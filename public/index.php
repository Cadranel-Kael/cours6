<?php

define('BASE_PATH', __DIR__ . '/../');
define('VIEWS_PATH', BASE_PATH . 'views');
define('CONTROLLERS_PATH', BASE_PATH . 'controllers');
define('STYLES_CONFIG', require BASE_PATH . "config/styles.php");
define('ENV_FILE', BASE_PATH . 'env.local.ini');

require BASE_PATH . 'utils/functions.php';
require BASE_PATH . 'database/Database.php';
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require BASE_PATH . 'router.php';
require BASE_PATH . 'Response.php';
require BASE_PATH . 'Validator.php';

routeToController($path);