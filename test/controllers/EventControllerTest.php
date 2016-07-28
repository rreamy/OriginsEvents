<?php
require_once __DIR__ . '/../../src/controllers/EventController.php';
require_once __DIR__ . '/../../src/models/Event.php';

class EventControllerTest extends PHPUnit_Framework_TestCase {

	public function testGetEventList() {
		$controller = new EventController(null);
		$result = $controller->getEventList();

		$this->assertEquals("{}", $result);
	}

}