<?php
// Data source

function connect_db()
{
  $dsn = 'mysql:host=localhost;dbname=mytodo';
  $username = 'root';
  $password = '';

  try {
    $db = new PDO($dsn, $username, $password);
    echo 'You have connected';
  } catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
  }
}
