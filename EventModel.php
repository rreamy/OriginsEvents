<?php
class EventModel {
	private $eventName;
	private $description;
	private $category;
	private $startTime;
	private $endTime;

	public function __construct($eventName, $description, $category, $startTime, $endTime) {
		$this->eventName = $eventName;
		$this->description = $description;
		$this->category = $category;
		$this->startTime = $startTime;
		$this->endTime = $endTime;
	}

	public function setEventName($eventName) {
		$this->eventName = $eventName;
	}

	public function getEventName() {
		return $this->eventName;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setCategory($category) {
		$this->category = $category;
	}

	public function getCategory() {
		return $this->category;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
	}

	public function getEndTime() {
		return $this->endTime;
	}
}