<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    "name" => 'Roblox',
    'gcm_sender_id' => '100155320909'
];

echo json_encode($data);