<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'emailAddress' => 'd************@roblox.com',
    'verified' => 'true',
    'canBypassPasswordForEmailUpdate' => 'true'
];

echo json_encode($data);