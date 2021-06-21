<?php

class QueryBuilder
{
  protected $pdo;

  // Constructor function
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  // Function to select everything from a table
  public function selectAll($table, $intoClass)
  {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
  }
}
