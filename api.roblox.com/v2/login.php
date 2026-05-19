<?php
http_response_code(200);
header('Content-Type: application/json');

$username = $_POST['username']; // username
$password = $_POST['password']; // password

$data = [
  'user' => [
    'id' => 1,
    'name' => $username,
    'displayName' => $username
  ],
  'isBanned' => false
];

echo json_encode($data);