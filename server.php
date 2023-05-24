<?php

$string = file_get_contents("dischi.json");

$disc_list = json_decode($string, true);

// var_dump($disc_list);

$results = $disc_list;

// if () {
// } else {
// }

header('Content-type: application/json');

echo json_encode($results);
