<?php
require_once __DIR__ . '/config/config.php';
require_once CONTROLLER_PATH . '/HomeController.php';

$controller = new HomeController();
$controller->index();
