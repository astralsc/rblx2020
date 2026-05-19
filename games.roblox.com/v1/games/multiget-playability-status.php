<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    [
        'playabilityStatus' => 'GuestProhibited',
        'isPlayable' => false,
        'universeId' => 1
    ]
];

echo json_encode($data);