<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'rolloutFeatures' => [
        [
            'featureName' => 'LuaChat',
            'isRolloutEnabled' => 'false'
        ]
    ]
];

echo json_encode($data);