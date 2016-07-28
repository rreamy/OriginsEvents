<?php
include_once('../dao/EventDao.php');

class EventController {
	
	private $eventDao;

	public function __construct() {
		$this->eventDao = new EventDao();
	}

	public function getFullEventList() {
		$this->eventDao->getFullEventList();
		return "{}";
	}
}

$eventController = new EventController();
$eventController->getFullEventList();