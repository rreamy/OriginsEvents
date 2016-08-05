<?php
include_once(__DIR__.'/../dao/EventDao.php');

class EventController {
	
	private $eventDao;

	public function __construct() {
		$this->eventDao = new EventDao();
	}

	public function getFullEventList() {
		$eventList = $this->eventDao->getFullEventList();
		return json_encode($eventList);
	}
	
	public function getEventsByEventType($eventType) {
		$eventList = $this->eventDao->getEventsByEventType($eventType);
		return json_encode($eventList);
	}
}

$eventController = new EventController();
$eventController->getFullEventList();