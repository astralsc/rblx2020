<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'UserId' => '1',
    'Username' => 'ROBLOX',
    'DisplayName' => 'ROBLOX',
    'HasPasswordSet' => true,
    'Email' => [
        'Value' => 'davidbaszucki@roblox.com',
        'IsVerified' => true,
    ],
    'AgeBracket' => 0,
    'Roles' => [],
    'MembershipType' => '1',
    'RobuxBalance' => 0,
    'NotificationCount' => 0,
    'EmailNotificationEnabled' => false,
    'PasswordNotificationEnabled' => false,
    'CountryCode' => 'US',
];

echo json_encode($data);