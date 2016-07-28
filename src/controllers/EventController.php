<?php
include_once('../dao/EventDao.php');

class EventController {
	
	private $eventDao;

	public function __construct() {
		$this->eventDao = new EventDao();
	}

	public function getFullEventList() {
		$eventList = $this->eventDao->getFullEventList();
		print $eventList;
		return "{}";
	}
}

$eventController = new EventController();
$eventController->getFullEventList();