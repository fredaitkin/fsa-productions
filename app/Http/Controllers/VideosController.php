<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class VideosController extends Controller
{
    public function index(): View
    {
        $videos = DB::table('videos')
            ->select(['id', 'code', 'title', 'description'])
            ->orderByDesc('id')
            ->get();

        return view('videos.index', [
            'videos' => $videos,
            'canManageVideos' => $this->canManageVideos(),
        ]);
    }

    public function create(): View
    {
        $this->authorizeSiteAdministrator();

        return view('videos.create');
    }

    public function edit(int $videoId): View
    {
        $this->authorizeSiteAdministrator();

        $video = DB::table('videos')
            ->select(['id', 'code', 'title', 'description'])
            ->where('id', $videoId)
            ->first();

        abort_if($video === null, Response::HTTP_NOT_FOUND);

        return view('videos.edit', [
            'video' => $video,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->authorizeSiteAdministrator();

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

    public function update(Request $request, int $videoId): RedirectResponse
    {
        $this->authorizeSiteAdministrator();

        $videoExists = DB::table('videos')
            ->where('id', $videoId)
            ->exists();

        abort_if(! $videoExists, Response::HTTP_NOT_FOUND);

        $validated = $request->validate([
            'code' => ['required', 'string', 'max:20', 'regex:/^[A-Za-z0-9_-]+$/'],
            'title' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
        ]);

        DB::table('videos')
            ->where('id', $videoId)
            ->update([
                'code' => $validated['code'],
                'title' => $validated['title'],
                'description' => $validated['description'] ?? null,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('videos.index')
            ->with('status', 'Video updated successfully.');
    }

    private function authorizeSiteAdministrator(): void
    {
        abort_unless($this->canManageVideos(), Response::HTTP_FORBIDDEN);
    }

    private function canManageVideos(): bool
    {
        $user = Auth::user();

        if ($user === null) {
            return false;
        }

        return DB::table('user_roles')
            ->join('roles', 'user_roles.role_id', '=', 'roles.role_id')
            ->where('user_roles.user_id', $user->id)
            ->where('roles.role', 'Site Administrator')
            ->exists();
    }
}
