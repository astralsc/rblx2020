<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'Regex' => '^\\w+([-_+.]\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*$'
];

echo json_encode($data);