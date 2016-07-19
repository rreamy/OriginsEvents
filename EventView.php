<?php
class EventView {
	private $event;
	private $controller;

	public function __construct($controller, $event) {
		$this->event = $event;
		$this->controller = $controller;
	}

	public function output() {
		return $this->event->getEventName();
	}
}