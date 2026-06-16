<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ServicesController extends Controller
{
    public function __invoke(): View
    {
        return view('services.index');
    }
}