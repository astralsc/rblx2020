<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'tradePrivacy' => 'NoOne'
];

echo json_encode($data);