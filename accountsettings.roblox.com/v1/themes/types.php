<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'data' => [
        'Light',
        'Dark'
    ]
];

echo json_encode($data);