<?php
include_once('../models/Event.php');

class EventDao {
	
	private $server;
	private $username;
	private $password;
	private $dbName;
	
	public function __construct() {
		$this->server = "66.147.244.233:3306";
		$this->username = "vassarhi_game";
		$this->password = "s4z894a993";
		$this->dbName = "vassarhi_events";
	}
	
	
	public function getFullEventList() {
		$eventList = array();
		$conn = mysqli_connect($this->server, $this->username, $this->password, $this->dbName);
		if (!$conn) {
			return null;
		}
		
		$sql = "select name, description, category, start_date_time, duration from event_list";
		if(!$result = $conn->query($sql)) {
			return null;
		}
		while($row = $result->fetch_assoc()) {
			$event = new Event($row['name'], $row['description'], $row['category'], $row['start_date_time'], $row['duration']);
			$eventList[] = $event;
		}
		
		return $eventList;
	}
}
