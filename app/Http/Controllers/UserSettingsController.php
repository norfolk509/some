<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function setNotifications(Request $request)
    {
       //TODO: send data to endpoint when created
        return response()->json($request);
    }

    public function setFavoriteGame(Request $request)
    {
        //TODO: send data to endpoint when created
        return response()->json($request);
    }
}