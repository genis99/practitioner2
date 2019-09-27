<?php

$query = new QueryBuilder(Connection::make());
$results = $query->selectAll('tasks');
$task = $results[0];  //Tria la id de la BBDD

// $task = [
//     'name' => 'Comprar llet',
//     'description' => 'Al lidl...',
//     'completed' => false,
// ];

// $tasks = [
//     $task1,
//     $task2,
//     $task3,
// ];