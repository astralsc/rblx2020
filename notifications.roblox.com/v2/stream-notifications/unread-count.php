<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'unreadNotifications' => 67,
    'statusMessage' => 'null'
];

echo json_encode($data);