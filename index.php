<?php
require_once("models/Event.php");
require_once("EventView.php");
require_once("controllers/EventController.php");

$model = new EventModel("Event Name", "Description", "Category", "Start Time", "End Time");
$controller = new EventController($model);
$view = new EventView($controller, $model);
echo $view->output();