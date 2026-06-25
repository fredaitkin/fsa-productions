<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
{
    public function index(): View
    {
        $videos = DB::table('videos')
            ->select(['code', 'title', 'description'])
            ->orderByDesc('id')
            ->get();

        return view('videos.index', [
            'videos' => $videos,
        ]);
    }

    public function create(): View
    {
        return view('videos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'max:20', 'regex:/^[A-Za-z0-9_-]+$/'],
            'title' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
        ]);

        DB::table('videos')->insert([
            'code' => $validated['code'],
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('videos.index')
            ->with('status', 'Video added successfully.');
    }
}
