<?php



// Person Array


$person = [

    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'

];

$person['name'] = 'Haydos';

unset($person['age']);


// End of Step 7 test

$task = [

    'title' => 'Mow Lawns',
    'due' => 'Tuesday',
    'assigned_to' => 'Haydos',
    'completed' => 'true'

];



require 'index.view.php';
