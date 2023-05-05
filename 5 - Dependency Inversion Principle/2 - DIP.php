<?php

use MySQLConnection;

// Refactor of previous class with Dependecy Injection
// But still violates DIP because still depends on an implementation rather than an abstraction

class PasswordReminder
{
	private $dbConnection;

	public function __construct(MySQLConnection $dbConnection)
	{
		$this->dbConnection = $dbConnection;
	}
}
