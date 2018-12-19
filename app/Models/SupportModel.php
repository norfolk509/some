<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class SupportModel
{
    private $baseApiUrl;
    private $guzzleClient;
    private $faqCategories;

    public function __construct()
    {
        $this->baseApiUrl = config('api_url.base_url.' . app('env'));
        $this->guzzleClient = new Client();
        $this->faqCategories = [
            'Service' => 1,
            'Online Games' => 2,
            'Downloadable Games' => 10,
            'Profile' => 3,
            'Functions' => 4,
            'Unity Web Player' => 5,
            'Miscellaneous' => 6,
            'Membership Registration and Payment Method' => 7,
            'Login' => 8,
            'Gold' => 9,
        ];
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->faqCategories;
    }

    /**
     * @return array
     */
    public function getFAQList(): array
    {
//        $uri = config('api_url.uri.v1.support.faq');
//
//        $guzzleClient = new Client();
//        try {
//            $request = $guzzleClient->get($this->baseApiUrl . $uri);
//            $faqDetails = json_decode($request->getBody()->getContents(), true);
//            $returnData = [];
//            foreach ($faqDetails as $faq) {
//                foreach ($this->faqCategories as $category_name => $category_id) {
//                    if ($faq['category_no'] == $category_id) {
//                        $returnData[$category_name][] = $faq;
//                    }
//                }
//            }
//
//        } catch (ClientException $e) {
//            $returnData = [];
//        }

        // TODO: Remove this when end point is ready
        $returnData= [
            'Service' => [
                ['category_no' => 1, 'qa_no' => 1, 'restrict_site_type' => 1, 'question' => 'What is Nutaku?', 'answer' => 'Nutaku is an online community offering a great selection of free-to-play games. We allow you to come together with other gaming enthusiasts to share, collaborate, and compete against each other in a friendly environment.'],
                ['category_no' => 1, 'qa_no' => 2, 'restrict_site_type' => 1, 'question' => 'Is Nutaku a game developer?', 'answer' => 'No. Nutaku partners with game developers around the world to bring their online games to English-speaking audiences.'],
                ['category_no' => 1, 'qa_no' => 3, 'restrict_site_type' => 1, 'question' => 'Do I have to pay to access games on Nutaku?', 'answer' => 'We Offer 3 main categories of games on Nutaku. <a href="/games/">Browser Games</a> are free to play and run in internet browsers such as Google Chrome or Firefox. <a href="/games/mobile/">Mobile Games</a> are also free to play and can be played on Android devices. Both Mobile Games and Browser Games allow users the option to enhance their experience by purchasing valuable in game items and upgrades with <a href="/members/cart/purchase/gold/">Nutaku Gold!</a><br>The third category of games available to Nutaku users are <a href="/games/download/">Downloadable Games</a>. Most games in this category are available for purchase. Once purchased these types of game will always be available for you to download and play on your PC. Some downloadable games such as <a href="/games/app/sacred-sword-princesses/">Sacred Sword Princesses</a> are free to play but must be downloaded and installed on your PC.']
            ],
            'Online Games' => [
                ['category_no' => 2, 'qa_no' => 1, 'restrict_site_type' => 1, 'question' => 'Can I play against other people?', 'answer' => 'Yes. Some Nutaku games have a multiplayer element, pitting you against other live players from around the world.'],
                ['category_no' => 2, 'qa_no' => 2, 'restrict_site_type' => 1, 'question' => 'How do I contact a game developer?', 'answer' => 'Inquiries about game content or purchased items can be sent through the <a href="/support/game-inquiries/">Gameplay Support</a> form.'],
            ]
        ];
        // TODO: End

        return $returnData;
    }

}
