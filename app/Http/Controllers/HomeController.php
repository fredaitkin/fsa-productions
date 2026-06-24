<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $products = [
            'Consulting',
            'Video production',
            'Video conversion',
        ];

        return view('home', [
            'products' => $products,
        ]);
    }
}
