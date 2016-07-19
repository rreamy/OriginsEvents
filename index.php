<?php
require_once("EventModel.php");
require_once("EventView.php");
require_once("EventController.php");

$model = new EventModel("Event Name", "Description", "Category", "Start Time", "End Time");
$controller = new EventController($model);
$view = new EventView($controller, $model);
echo $view->output();