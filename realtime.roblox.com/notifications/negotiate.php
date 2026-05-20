<?php
http_response_code(200);
header('Content-Type => application/json');

$data = [
    'Url' => ':8443',
    'ConnectionToken' => 'token',
    'ConnectionId' => '1',
    'KeepAliveTimeout' => 20,
    'DisconnectTimeout' => 30,
    'ConnectionTimeout' => 110,
    'TryWebSockets' => false,
    'ProtocolVersion' => '1.5',
    'TransportConnectTimeout' => 5,
    'LongPollDelay' => 0
];

echo json_encode($data);