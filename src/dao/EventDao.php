<?php
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
		$conn = mysqli_connect($this->server, $this->username, $this->password, $this->dbName);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		print "successfully connected";
	}
}
