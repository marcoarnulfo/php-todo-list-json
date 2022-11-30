<?php

$tasksString = file_get_contents('tasks.json');
$tasksArray = json_decode($tasksString);


// fare inverso

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    array_push($tasksArray, $_POST['task']);
}


$test = json_encode($tasksArray);
file_put_contents('tasks.json', $test);


header('Content-Type: application/json');
echo json_encode($tasksArray);

//echo $_POST['task'];


/*
$tasks = [
    "Learn PHP",
    "Learn Mysql",
    "Learn Laravel",
    "Read a book"
];

header('Content-Type: application/json');
echo json_encode($tasks);
*/
