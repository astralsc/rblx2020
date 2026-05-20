<?php
http_response_code(200);
header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);
$birthday = isset($input['birthday']) ? $input['birthday'] : null;
$context = isset($input['context']) ? $input['context'] : null;
$gender = isset($input['gender']) ? $input['gender'] : null;
$isTosAgreementBoxChecked = isset($input['isTosAgreementBoxChecked']) ? $input['isTosAgreementBoxChecked'] : null;
$password = isset($input['password']) ? $input['password'] : null;
$username = isset($input['username']) ? $input['username'] : null;

$data = [
  'user' => [
    'id' => 1,
    'name' => $username,
    'displayName' => $username
  ],
  'isBanned' => false
];

echo json_encode($data);