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
    'Status' => 'OK',
    'UserInfo' => [
        'UserID' => 1,
        'UserName' => $username,
        'RobuxBalance' => 0,
        'TicketsBalance' => 0,
        'ThumbnailUrl' => 'https://web.archive.org/web/20070808165254im_/http://t3.roblox.com:80/Avatar-100x100-83e75d04a99ca6e52c16a17cce5af580.Png',
        'IsAnyBuildersClubMember' => false
    ]
];

echo json_encode($data);