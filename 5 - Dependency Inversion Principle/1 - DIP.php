<?php

use MySQLConnection;

// Class with a lot of coupling because has to implement MySQLConnection

class PasswordReminder
{
	private $dbConnection;

	public function __construct()
	{
		$this->dbConnection = new MySQLConnection();
	}
}
