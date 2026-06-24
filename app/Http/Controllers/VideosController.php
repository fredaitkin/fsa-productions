<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class VideosController extends Controller
{
    public function __invoke(): View
    {
        $videos = [
            'Brand films',
            'Promo edits',
            'Behind-the-scenes coverage',
            'Social-first content',
        ];

        return view('videos.index', [
            'videos' => $videos,
        ]);
    }
}
