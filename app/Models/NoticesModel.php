<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class NoticesModel
{
    private $baseApiUrl;
    private $guzzleClient;

    public function __construct()
    {
        $this->baseApiUrl = config('api_url.base_url.' . app('env'));
        $this->guzzleClient = new Client();
    }

    /**
     * This function return all active notices for the given parameters
     * @param int $site
     * @param string $post_page
     * @return array
     */
    public function getNoticeList(int $site, string $post_page)
    {
//        $uri = config('api_url.uri.v1.notices.all');
//        try {
//            $request = $this->guzzleClient->get($this->baseApiUrl . $uri, [
//                'query' => [
//                    'site' => $site,
//                    'post_page' => $post_page
//                ]
//            ]);
//            $returnData = json_decode($request->getBody()->getContents(), true);
//        } catch (ClientException $e) {
//            $returnData = [];
//        }

        // TODO: change this when end-point is created
        $returnData = [
            ['id' => 1, 'title' => 'Notification of Server Maintenance', 'text' => 'Dear players,

We will be performing maintenance on Thursday, November 24th beginning at 03:00 AM EST, and the expected service downtime is an hour.
This maintenance may affect your gameplay. Please make sure you log out before maintenance begins.
We apologize for any inconvenience this may cause, and thank you for your cooperation.'],
            ['id' => 2, 'title' => 'All your base are belong to us', 'text' => '...']
        ];

        return $returnData;
    }

}
