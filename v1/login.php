<?php
http_response_code(200);
header('Content-Type: application/json');

include __DIR__ . '/../config/db.php';

$input = json_decode(file_get_contents('php://input'), true);

$ctype = $input['ctype'];
$cvalue = $input['cvalue'];
$password = $input['password'];

if (!$cvalue || !$password) {
    echo json_encode(["success" => false]);
    exit;
}

// login check
$stmt = $DBReq->prepare("SELECT id, username, displayname, password, isbanned, robux, tickets FROM accounts WHERE username = ? LIMIT 1");
$stmt->bind_param("s", $cvalue);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

if (!$user) {
    echo json_encode(["success" => false]);
    exit;
}

if (!password_verify($password, $user['password'])) {
    echo json_encode(["success" => false]);
    exit;
}

// .roblosecurity gen
$genNewToken = bin2hex(openssl_random_pseudo_bytes(500));
$genNewToken = substr($genNewToken, 0, 884);
$roblosecurity = '_|WARNING:-DO-NOT-SHARE-THIS.--Sharing-this-will-allow-someone-to-log-in-as-you-and-to-steal-your-ROBUX-and-items.|_'.$genNewToken;

// save token
$stmt = $DBReq->prepare("UPDATE accounts SET roblosecurity = ? WHERE id = ?");
$stmt->bind_param("si", $roblosecurity, $user['id']);
$stmt->execute();
$stmt->close();

// set .robloxsecurity cookie
setcookie(".ROBLOSECURITY", $roblosecurity, time() + (60 * 60 * 24 * 365), "/");

// final
$data = [
  'user' => [
    'id' => $user['id'],
    'name' => $user['username'],
    'displayName' => $user['displayname']
  ],
  'isBanned' => $user['isbanned']
];

echo json_encode($data);