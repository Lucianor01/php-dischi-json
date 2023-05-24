<?php

$string = file_get_contents("apis/dischi.json");

$disc_list = json_decode($string, true);

// var_dump($disc_list);

$results = [];

if (isset($_POST['discIndex'])) {

    $disc_index = $_POST['discIndex'];

    $singoloDisco = $disc_list[$disc_index];

    $results = $singoloDisco;
} else {

    $results = $disc_list;
}

header('Content-type: application/json');

echo json_encode($results);
