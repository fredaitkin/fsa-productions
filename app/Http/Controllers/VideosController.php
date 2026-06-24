<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class VideosController extends Controller
{
    public function __invoke(): View
    {
        $videos = [
            '7cI6OJEYlbs' => 'The Tower Show',
            '28X8floYOBI' => 'Cycling to the UWS',
            'ff7x_MUCgL4' => 'Claude',
            '1BSI5IQGSe8' => 'Sounds of Nashville',
        ];

        return view('videos.index', [
            'videos' => $videos,
        ]);
    }
}
