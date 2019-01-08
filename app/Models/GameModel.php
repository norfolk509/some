<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use App\Helpers\ApiUrlHelper as ApiUrlHelper;

class GameModel
{
    private $baseApiUrl;
    private $guzzleClient;

    public function __construct()
    {
        $this->baseApiUrl = config('api_url.base_url.' . app('env'));
        $this->guzzleClient = new Client();
    }

    /**
     * @return array
     */
    public function getHomePageSkin(): array
    {
        return [
            'url' => '/',
            'image' => '/images/temp/larger-full-width-skin.png',
            'alt' => 'Welcome to Nutaku',
            'is_skin_set' => true // TODO: Temporary set to verify Page Skin availability
        ];
    }

    /**
     * @return array
     */
    public function getBannerInfoList(): array
    {
        $uri = config('api_url.uri.v1.miscellaneous.banners_all');

        $guzzleClient = new Client();
        try {
            $request = $guzzleClient->get($this->baseApiUrl . $uri, [
                'query' => [
                    'platform' => 1,
                    'adult' => 1,
                ]
            ]);
            $returnData = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $returnData = [];
        }

        return $returnData;
    }

    /**
     * @return array
     */
    public function getGameEvents(): array
    {
        $uri = config('api_url.uri.v1.miscellaneous.events_all');
        $querryParams = '?gamePlatform=0&adult=1';

        $guzzleClient = new Client();
        try {
            $request = $guzzleClient->get($this->baseApiUrl . $uri . $querryParams);
            $returnData = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $returnData = [];
        }

        return $returnData;
    }

    /**
     * TODO: this logic may change based on API changes, we will not get 2 different response structures in the future
     * @param string $uri
     * @param array $queryParams
     * @return array
     */
    public function getGames(string $uri, array $queryParams): array
    {
        try {
            $request = $this->guzzleClient->get($this->baseApiUrl . $uri . $queryParams['aggregated']);
            $aggregatedGames = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $aggregatedGames = [];
        }

        if (empty($aggregatedGames)) {
            return [];
        }

        try {
            $request = $this->guzzleClient->get($this->baseApiUrl . $uri . $queryParams['not_aggregated']);
            $notAggregatedGames = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $notAggregatedGames = [];
        }

        $returnData = [];
        foreach ($notAggregatedGames as $nGame) {
            foreach ($aggregatedGames as $agGame) {
                if ($nGame['id'] === $agGame['id']) {
                    $returnData[] = $nGame;
                }
            }
        }
        return $returnData;
    }

    /**
     * TODO: this logic may change based on API changes, we will not get 2 different response structures in the future
     * Condition for games that have price
     * @param string $uri
     * @param array $queryParams
     * @return array
     */
    public function getPremiumPornGames(string $uri, array $queryParams): array
    {
        try {
            $request = $this->guzzleClient->get($this->baseApiUrl . $uri . $queryParams['aggregated']);
            $aggregatedGames = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $aggregatedGames = [];
        }

        if (empty($aggregatedGames)) {
            return [];
        }

        try {
            $request = $this->guzzleClient->get($this->baseApiUrl . $uri . $queryParams['not_aggregated']);
            $notAggregatedGames = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $notAggregatedGames = [];
        }

        $returnData = [];
        foreach ($notAggregatedGames as $nGame) {
            foreach ($aggregatedGames as $agGame) {
                if ($nGame['id'] === $agGame['id'] && !is_null($nGame['price'])) {
                    $returnData[] = $nGame;
                }
            }
        }
        return $returnData;
    }

    /**
     * @return array|mixed
     */
    public function getHottestGenres()
    {
        $uri = config('api_url.uri.v1.games.all_genres');
        try {
            $request = $this->guzzleClient->get($this->baseApiUrl . $uri);
            $returnData = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $returnData = [];
        }

        return $returnData;
    }

    public function getGame($identifier) : array
    {
        $url = ApiUrlHelper::getApiUrl('api_url.uri.v1.games.detail_one', ['gameIdentifier' => $identifier]);

        try {
            $request = $this->guzzleClient->get($url);
            $game = json_decode($request->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $game = [];
        }

        return $game;
    }

    public function getSimilarGames($id) : array
    {
//      TODO: returning random games untill we get endpoint
        $uri = config('api_url.uri.v1.games.detail_all');
        $queryParams = [
            'aggregated' => '?aggType=1&gameType=1&gamePlatform=1&adult=1',
            'not_aggregated' => '?gameType=1&gamePlatform=1&adult=1'
        ];

        $games = $this->getGames($uri, $queryParams);

        return $games;
    }
}
