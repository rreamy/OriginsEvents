<?php
require_once("controllers/EventController.php");

$controller = new EventController();
echo $controller->getFullEventList();