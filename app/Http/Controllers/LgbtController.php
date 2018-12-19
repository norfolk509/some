<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Storage;

class LgbtController extends Controller
{
    /**
     * @param null $lgbtq
     * @param null $genre
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function genres($lgbtq = null, $genre = null)
    {
        $content = '';
        $style = '';
        $diskPath = config('promo_lgbt_path');

        if ($genre != NULL) {
            $param = $genre;
        } else {
            $param = $lgbtq;
        }

        try {
            $content = Storage::disk($diskPath)->get($param . '.net' . '.' . 'html');
            $style = Storage::disk(config('promo_lgbt_path'))->get('variables.html');
        } catch (Exception $e) {
            abort(404, 'Page not found');
        }

        return view('promo.lgbt.lgbt', ['content' => $content, 'style' => $style]);
    }
}
