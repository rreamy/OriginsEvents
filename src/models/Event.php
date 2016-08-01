<?php
class Event {
	public $eventName;
	public $description;
	public $category;
	public $startTime;
	public $duration;

	public function __construct($eventName, $description, $category, $startTime, $duration) {
		$this->eventName = $eventName;
		$this->description = $description;
		$this->category = $category;
		$this->startTime = $startTime;
		$this->duration = $duration;
	}

}