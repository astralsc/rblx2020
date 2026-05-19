<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'birthMonth' => 1,
    'birthDay' => 1,
    'birthYear' => 1927
];

echo json_encode($data);