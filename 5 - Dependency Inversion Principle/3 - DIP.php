<?php

// Refactor of previous class with Dependecy Inversion

interface DBConnectionInterface
{
  public function connect();
}

class MySQLConnection implements DBConnectionInterface
{
  public function connect()
  {
  }
}

class OracleConnection implements DBConnectionInterface
{
  public function connect()
  {
  }
}

class PasswordReminder
{
  private $dbConnection;

  public function __construct(DBConnectionInterface $dbConnection)
  {
    $this->dbConnection = $dbConnection;
  }
}
