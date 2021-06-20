<?php

// // Normal Arrays
$names = [
  'Jay',
  'Whit',
  'Isis',
  'Keera',
  'Kaleb',
  'Lincoln',
  'William',
  'Atlas',
];

// // Normal Array
// $animals = ['Kaleb','Lincoln','William','Atlas'];

// // Associative Array
$person = [
  'age' => 36,
  'name' => 'Jay',
  'hair' => 'Blonde',
  'Job' => 'Web Developer',
];

// $person['name'] = "New Jay";

// unset($person['age']);

$task = [
  'title' => 'Finish homework',
  'due' => 'today',
  'assigned_to' => 'Jeffrey',
  'completed' => true,
];

require 'index.view.php';
