<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'games' => [
        [
            'creatorId' => 1,
            'creatorName' => 'ROBLOX',
            'creatorType' => 'ROBLOX',
            'creatorHasVerifiedBadge' => true,
            'totalUpVotes' => 16,
            'totalDownVotes' => 4,
            'universeId' => 13058, // universeid (example: https://apis.roblox.com/universes/v1/places/1818/universe)
            'name' => 'Classic: Crossroads',
            'placeId' => 1818,
            'playerCount' => 0,
            'imageToken' => 'T_8658716537_c753',
            'isSponsored' => true,
            'nativeAdData' => '',
            'isShowSponsoredLabel' => true,
            'price' => null,
            'analyticsIdentifier' => null,
            'gameDescription' => "The classic ROBLOX level is back!",
            'genre' => 'Action',
        ]
    ],

    'suggestedKeyword'        => null,
    'correctedKeyword'        => null,
    'filteredKeyword'         => null,
    'hasMoreRows'             => true,
    'nextPageExclusiveStartId'=> null,
    'featuredSearchUniverseId'=> null,
    'emphasis'                => false,
    'cutOffIndex'             => null,
    'algorithm'               => 'GameSearchUsingSimilarQueryService',
    'algorithmQueryType'      => 'Bucketboost',
    'suggestionAlgorithm'     => 'GameSuggestions_V2',
    'relatedGames'            => [],
    'esDebugInfo'             => null
];

echo json_encode($data);