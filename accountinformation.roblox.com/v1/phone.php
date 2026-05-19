<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'countryCode' => 'CA',
    'prefix' => '1',
    'phone' => '+1 *** **3 ***',
    'isVerified' => 'true',
    'verificationCodeLength' => 6,
    'canBypassPasswordForPhoneUpdate' => 'true'
];

echo json_encode($data);