<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'count' => 0
];

echo json_encode($data);