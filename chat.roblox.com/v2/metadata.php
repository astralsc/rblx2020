<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'errors' => [
        [
            'code' => 0,
            'message' => 'Authorization has been denied for this request.'
        ]
    ]
];

echo json_encode($data);