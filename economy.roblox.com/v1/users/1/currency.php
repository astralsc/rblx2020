<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'robux' => 1000000
];

echo json_encode($data);