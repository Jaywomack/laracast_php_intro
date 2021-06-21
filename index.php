<?php

$database = require 'bootstrap.php';
require 'Task.php';

$tasks = $database->selectAll('todos', 'Task');

require 'index.view.php';
