<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'multiGetContactsMaxSize' => 200,
    'multiGetContactsCacheTTLinMS' => 30000
];

echo json_encode($data);