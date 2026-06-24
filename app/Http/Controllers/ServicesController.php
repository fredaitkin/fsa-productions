<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ServicesController extends Controller
{
    public function __invoke(): View
    {
        $services = [
            [
                'title' => 'Production planning',
                'description' => 'Structured pre-production, creative direction, and delivery planning for polished output.',
            ],
            [
                'title' => 'Video production',
                'description' => 'Branded clips, interviews, social content, and event coverage tailored to your story.',
            ],
            [
                'title' => 'Post-production',
                'description' => 'Editing, motion graphics, color, and sound work that makes the final cut feel complete.',
            ],
        ];

        return view('services.index', [
            'services' => $services,
        ]);
    }
}
