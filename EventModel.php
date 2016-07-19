<?php
class EventModel {
	private $eventName;
	private $description;
	private $category;
	private $startTime;
	private $endTime;

	public function __construct() {
		$this->eventName = "event name";
		$this->description = "description";
		$this->category = "category";
		$this->startTime = "startTime";
		$this->endTime = "endTime";
	}

	public function getEventName() {
		return $this->eventName;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getCategory() {
		return $this->category;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function getEndTime() {
		return $this->endTime;
	}
}