<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'code' => 0, // 0 = Valid, 1 = Taken, 2 = Inappropriate
    'message' => 'Username is valid' // Username is valid or Username is already in use or Username not appropriate for Roblox
];

echo json_encode($data);