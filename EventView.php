<?php
class EventView {
	private $event;
	private $controller;

	public function __construct($controller, $event) {
		$this->event = $event;
		$this->controller = $controller;
	}

	public function output() {
		$output = $this->event->getEventName() . "</br>" . 
			$this->event->getDescription() . "</br>" .
			$this->event->getCategory() . "</br>" .
			$this->event->getStartTime() . "</br>" .
			$this->event->getEndTime() . "</br>";
		return $output;
	}
}