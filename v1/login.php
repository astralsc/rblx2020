<?php
http_response_code(200);
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$ctype = $input['ctype']; // type for cvalue
$cvalue = $input['cvalue']; // username
$password = $input['password']; // password

$data = [
  'user' => [
    'id' => 1,
    'name' => $cvalue,
    'displayName' => $cvalue
  ],
  'isBanned' => false
];

echo json_encode($data);