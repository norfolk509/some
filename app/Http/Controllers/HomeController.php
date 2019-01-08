<?php

namespace App\Http\Controllers;

use App\Models\GameModel;

class HomeController extends Controller
{

    private $gameModel;

    public function __construct(GameModel $gameModel)
    {
        $this->gameModel = $gameModel;
    }

    /**
     * Redirect to the home route for site consistency
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function landing()
    {
        return redirect('home');
    }

    /**
     * This is the main function to display the content of the Home page
     */
    public function index()
    {
        //GET home page skin ()
        $skin = $this->gameModel->getHomePageSkin();

        //GET banner games
        $bannerGames = $this->gameModel->getBannerInfoList();

        //GET game events
        $gameEvents = $this->gameModel->getGameEvents();

        //GET free games (Free Porn Games section)
        $uri = config('api_url.uri.v1.games.detail_all');
        $queryParams = [
            'aggregated' => '?aggType=1&gameType=1&gamePlatform=1&adult=1',
            'not_aggregated' => '?gameType=1&gamePlatform=1&adult=1'
        ];
        $newestPornGames = $freePornGames = $this->gameModel->getGames($uri, $queryParams);

        //GET premium porn games (Premium Porn Games section)
        $queryParams = [
            'aggregated' => '?aggType=1&gameType=2&gamePlatform=1&adult=1',
            'not_aggregated' => '?gameType=2&gamePlatform=1&adult=1'
        ];
        $premiumPornGames = $this->gameModel->getPremiumPornGames($uri, $queryParams);

        //GET iOS games
        $queryParams = [
            'aggregated' => '?aggType=0&gameType=1&gamePlatform=2&adult=1',
            'not_aggregated' => '?gameType=1&gamePlatform=2&adult=1'
        ];
        $topIOSGames = $this->gameModel->getGames($uri, $queryParams);

        //GET Android games
        $queryParams = [
            'aggregated' => '?aggType=0&gameType=2&gamePlatform=2&adult=1',
            'not_aggregated' => '?gameType=2&gamePlatform=2&adult=1'
        ];
        $topAndroidGames = $this->gameModel->getGames($uri, $queryParams);

        //GET hottest genre TODO change when GATEWAY API return correct data
        $hottestGenres = $this->gameModel->getHottestGenres();

        $isDesktop = device_agent()->isDesktop();

        // TODO change when implementing languages and add IF in view
        $topLanguageGames = $freePornGames;

        return view('home.index', compact('skin', 'bannerGames', 'gameEvents', 'freePornGames',
            'premiumPornGames', 'newestPornGames', 'topAndroidGames', 'topIOSGames', 'hottestGenres', 'isDesktop', 'topLanguageGames'));
    }

}
