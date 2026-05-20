<?php
http_response_code(200);
header('Content-Type: application/json');

include __DIR__ . '/../../../../config/db.php';

$user = null;
$userId = 0;
$username = 'unknown';
$displayname = 'unknown';
$robux = 0;
$tickets = 0;
$theme = 'light';

if (isset($_COOKIE['_ROBLOSECURITY'])) {
    $token = $_COOKIE['_ROBLOSECURITY'];

    $stmt = $DBReq->prepare("
        SELECT id, username, displayname, isbanned, robux, tickets, roblosecurity, theme
        FROM accounts
        WHERE roblosecurity = ?
    ");

    $stmt->bind_param("s", $token);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    $userId = $user['id'];
    $username = $user['username'];
    $displayname = $user['displayname'];
    $robux = $user['robux'];
    $tickets = $user['tickets'];

    if ($user['isbanned'] == 1) {
        header("Location: /not-approved");
        exit();
    }

    $theme = ($user['theme'] === 'Dark') ? 'dark' : 'light';
}

$data = [
    'robux' => $robux
];

echo json_encode($data);