<?php

require_once 'controllers/Controller.php';
require_once 'controllers/IndexController.php';
require_once 'figures/Figure.php';
require_once 'figures/Square.php';
require_once 'figures/Round.php';

$controller = new IndexController();
$controller->actionIndex();