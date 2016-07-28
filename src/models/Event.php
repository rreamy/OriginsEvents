<?php
class Event {
	private $eventName;
	private $description;
	private $category;
	private $startTime;
	private $duration;

	public function __construct($eventName, $description, $category, $startTime, $duration) {
		$this->eventName = $eventName;
		$this->description = $description;
		$this->category = $category;
		$this->startTime = $startTime;
		$this->duration = $duration;
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

	public function setDuration($duration) {
		$this->endTime = $duration;
	}

	public function getDuration() {
		return $this->duration;
	}
}