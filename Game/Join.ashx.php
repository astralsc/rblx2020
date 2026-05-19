<?php
http_response_code(200);
header('Content-Type: application/json');

//rbxsig2%dTqdbW67JQwDfe9qnwmjBuy2FcsvWET43/BjdLAkuJX2OWTMYyiomVxFXksRn5JgJNCMelGU4cINs6xovCWp/stTHeukrV26opMetBr9U6GkW3ec4h1PVgXlwWGNMDQFCjXUGW3n00G+REEzDlTScdqnz8BBM5ZNSe33oF2V/1tDUDuSmBUufPnkTYjlmjK6XrCoa/lM6nkL4En2/bzwdKGXRns88MJNXOSzYQXCzOf7d/iAyvl3B0CQd+JUsJSdztZAXWCh7KUhL3GDYfN4XRPa0x3taEZMyBoPtmZ6ve3jUqXPih7GRYp0XAv7z3hOGzkF8UZonNKI0yv3Iok/Sg==%
$data = [
    "ClientPort" => 0,
    "MachineAddress" => "127.0.0.1",
    "ServerPort" => 53640,
    "ServerConnections" => [
        [
            "Address" => "127.0.0.1",
            "Port" => 53640
        ]
    ],
    "DirectServerReturn" => true,
    "PingUrl" => "https://localhost/Game/ClientPresence.ashx?version=old&PlaceID=1818&GameID=29fd9df4-4c59-4d8c-8cee-8f187b09709b&UserID=1",
    "PingInterval" => 120,
    "UserName" => "ROBLOX",
    "DisplayName" => "ROBLOX",
    "SeleniumTestMode" => false,
    "UserId" => 1,
    "RobloxLocale" => "en_us",
    "GameLocale" => "en_us#RobloxTranslateAbTest2",
    "SuperSafeChat" => false,
    "CharacterAppearance" => "https://avatar.roblox.com/v1/users/1/avatar",
    "ClientTicket" => "2022-03-26T05:13:05.7649319Z;dj09X5iTmYtOPwh0hbEC8yvSO1t99oB3Yh5qD/sinDFszq3hPPaL6hH16TvtCen6cABIycyDv3tghW7k8W+xuqW0/xWvs0XJeiIWstmChYnORzM1yCAVnAh3puyxgaiIbg41WJSMALRSh1hoRiVFOXw4BKjSKk7DrTTcL9nOG1V5YwVnmAJKY7/m0yZ81xE99QL8UVdKz2ycK8l8JFvfkMvgpqLNBv0APRNykGDauEhAx283vARJFF0D9UuSV69q6htLJ1CN2kXL0Saxtt/kRdoP3p3Nhj2VgycZnGEo2NaG25vwc/KzOYEFUV0QdQPC8Vs2iFuq8oK+fXRc3v6dnQ==;BO8oP7rzmnIky5ethym6yRECd6H14ojfHP3nHxSzfTs=;XsuKZL4TBjh8STukr1AgkmDSo5LGgQKQbvymZYi/80TYPM5/MXNr5HKoF3MOT3Nfm0MrubracyAtg5O3slIKBg==;6",
    "GameId" => "29fd9df4-4c59-4d8c-8cee-8f187b09709b",
    "PlaceId" => 1818,
    "BaseUrl" => "http://assetgame.roblox.com/",
    "ChatStyle" => "ClassicAndBubble",
    "CreatorId" => 1,
    "CreatorTypeEnum" => "Group",
    "MembershipType" => "Premium",
    "AccountAge" => 1859,
    "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
    "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
    "CookieStoreEnabled" => true,
    "IsUnknownOrUnder13" => false,
    "GameChatType" => "AllUsers",
    "SessionId" => "{\"SessionId\":\"c89589f1-d1de-46e3-80e0-2703d1159409\",\"GameId\":\"29fd9df4-4c59-4d8c-8cee-8f187b09709b\"}",
    "AnalyticsSessionId" => "c89589f1-d1de-46e3-80e0-2703d1159409",
    "DataCenterId" => 302,
    "UniverseId" => 1818,
    "FollowUserId" => 1,
    "characterAppearanceId" => 1,
    "CountryCode" => "US",
    "RandomSeed1" => "7HOfysTid4XsV/3mBPPPhKHIykE4GXSBBBzd93rplbDQ3bNSgPFcR9auB780LjNYg+4mbNQPOqTmJ2o3hUefmw==",
    "ClientPublicKeyData" => "{\"creationTime\":\"19:56 11/23/2021\",\"applications\":{\"RakNetEarlyPublicKey\":{\"versions\":[{\"id\":2,\"value\":\"HwatfCnkndvyKCMPSa0VAl2M2c0GQv9+0z0kENhcj2w=\",\"allowed\":true}],\"send\":2,\"revert\":2}}}"
];

echo json_encode($data);