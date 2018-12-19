<?php

namespace App\Http\Controllers;
use App\Models\GameModel;
use Carbon;
use  App\Helpers\FileSizeHelper as FileSizeHelper;



class GameController extends Controller
{

    private $gameModel;

    public function __construct(GameModel $gameModel)
    {
        $this->gameModel = $gameModel;
    }

    public function show($id) {
        $game = $this->gameModel->getGame($id);
//        TODO: implement actual logic
        $user = [
            'id' => 123,
            'gameNotifications' => true,
            'isFavorite' => $this->isFavorite('132', $id)
        ];

        //      TODO: returning random games untill we get endpoint
        $similarGames = array_slice($this->gameModel->getSimilarGames($id), 0, 3);


        foreach($game['newsUpdates'] as $k => $v) {
           $game['newsUpdates'][$k]['createdAt'] = Carbon::createFromTimestamp($v['createdAt']);
        }
//        TODO: this will be restructued
        foreach($game['platformsSupported'] as $k => $v) {
            $game['platformsSupported'][$k]['releaseDate'] = Carbon::createFromTimestamp($v['releaseDate']);
        }
        if (!empty($game['appInfo'])) {
            $game['appInfo']['apkSize'] = FileSizeHelper::bytesToHuman($game['appInfo']['apkSize'] );
        }

        return view('games.single', compact('game', 'user', 'similarGames' ));
    }

    private function isFavorite($userId, $gameId) {
//        TODO: implement actual logic
        return true;
    }


}
