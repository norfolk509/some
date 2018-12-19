<?php
/*
|--------------------------------------------------------------------------
| API URLs and URIs
|--------------------------------------------------------------------------
|
| Here we define the different URI endpoints for the different micro-services
| NOTE: The structure except for the environment is subject to change based on
|       the micro-services evolution
|
*/
return [
    'base_url' => [
        'production' => 'http://ded5502.ded.reflected.net:8105',
        'stage' => 'http://ded5502.ded.reflected.net:8105',
        'develop' => 'http://ded5502.ded.reflected.net:8105',
        'develop-mtl' => 'http://ded5502.ded.reflected.net:8105',
        'local' => 'http://ded5502.ded.reflected.net:8105',
    ],
    'uri' => [
        'v1' => [
            'games' => [
                'detail_all' => '/v1/games', //GET - Get games details
                'detail_one' => '/v1/games/{gameIdentifier}', //GET - Get game details
                'upcoming' => '/v1/games/upcoming', //GET -  Get upcoming games
                'member_games' => '/v1/users/member/games', //GET - Get games owned by logged user
                'add_game' => '/v1/users/member/games', //POST - Add a game to logged user's library
                'get_summaries' => '/v1/users/member/games/{gameId}', //GET - Get a summary about the user's game
                'user_games' => '/v1/users/{userId}/games', //GET - Get games owned by the specified userId
                'get_user_one' => '/v1/users/{userId}/games/{gameId}', //GET - Get details for the requested user's game
                'update_access_time' => '/v1/users/member/games/{gameId}/access-time', //PUT - Update logged user game access time
                'purchase_game' => '/v1/users/member/games/{gameId}/purchase', //POST - Add an existing game to the user's library if it has the necessary funds
                'all_genres' => '/v1/games/genres', //GET - Get all genres and a count of games that are in the genre
                'user_specific_game' => '/v1/users/{userId}/games/{gameId}', //GET - Get details for the requested user's game
            ],
            'user_meta' => [
                'countries_all' => '/v1/meta/countries', //GET - Get all countries
                'countries_one' => '/v1/meta/countries/{countryId}', //GET - Get one requested country summary
                'occupations_all' => '/v1/meta/occupation', //GET - Get occupation
                'occupations_one' => '/v1/meta/occupation/{occupationId}', //GET - Get one requested occupation summary
            ],
            'miscellaneous' => [
                'faq' => '/v1/meta/FAQ', //GET - Get all frequently asked questions
                'banners_all' => '/v1/meta/banners', //GET - Get available banners
                'skin_all' => '/v1/meta/skin', //GET - Get active skin for Home Page TODO will be added to webservices
                'gold_packages_all' => '/v1/meta/gold-packages', //GET - Get all gold packages
                'events_all' => '/v1/meta/events' //GET - Get available events
            ],
            'user' => [
                'all_games' => '/v1/users/member/games', //GET -Get games owned by logged user
                'add_game' => '/v1/users/member/games', //POST - Add a game to logged user's library
                'get_game_summary' => '/v1/users/member/games/{gameId}', //GET - Get a summary about the user's game
                'get_gold' => '/v1/users/member/funds/gold', //GET - Get user's gold amount
                'update_game_access_time' => '/v1/users/member/games/{gameId}/access-time', //PUT - Update the current user's access time to the game
                'purchase_game' => '/v1/users/member/games/{gameId}/purchase', //POST - Add an existing game to the user's library if it has the necessary funds
            ],
            'user_public_info' => [
                'all_users' => '/v1/users', //GET - Get public users
                'one_user' => '/v1/users/{userId}', //GET - Get details about the requested user
                'user_games' => '/v1/users/{userId}/games', //GET - Get user's played games
                'user_specific_game' => '/v1/users/{userId}/games/{gameId}', //GET - Get details for the requested user's game
            ],
            'payment' => [
                'get_gold' => '/v1/users/member/funds/gold', //GET - Get user's gold amount
                'purchase_game' => '/v1/users/member/games/{gameId}/purchase' //POST - Add an existing game to the user's library if it has the necessary funds
            ],
            'auth'=>[
                'user_refresh'=>'/v1/auth/user/refresh', //GET - Create a refresh token
                'client_login'=>'/v1/auth/client/login', //GET - Create client's session and return the access token
                'user_email'=>'/v1/auth/user/email', //GET - Create a request to query user's email
                'user_login'=>'/v1/auth/user/login', //GET - Create a user session
                'user_register'=>'/v1/auth/user/register', //GET - Create user's account and return its identification details
            ]
        ]
    ]
];
