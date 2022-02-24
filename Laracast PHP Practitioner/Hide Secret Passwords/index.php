<?php


$database = require 'bootstrap.php';
// 1. loads a bootstrap file//

$tasks = $database->selectAll('todos');
// 6. now we have our database we call selectALL and pass in 'todos'//

require 'index.view.php';
// 8. we load a view//