@props(['title' => 'FSA Productions'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        @fonts
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-[#08111f] text-white">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <div class="absolute left-1/2 top-[-8rem] h-[32rem] w-[32rem] -translate-x-1/2 rounded-full bg-[#ff7a45]/20 blur-3xl"></div>
                <div class="absolute right-[-6rem] top-[14rem] h-[24rem] w-[24rem] rounded-full bg-[#ffcc66]/10 blur-3xl"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.08),_transparent_35%),linear-gradient(180deg,_rgba(10,17,31,0.85),_rgba(8,17,31,1))]"></div>
            </div>

            <div class="mx-auto flex min-h-screen w-full max-w-6xl flex-col px-6 pb-12 pt-6 lg:px-10">
                <header class="flex flex-col gap-6 border-b border-white/10 pb-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#ffcc66]">FSA Productions</p>
                        <h1 class="mt-3 text-3xl font-semibold tracking-tight sm:text-5xl">
                            <a href="{{ route('home') }}" class="transition hover:text-[#ffcc66]">FSA Productions</a>
                        </h1>
                    </div>

                    <nav class="flex flex-wrap gap-3">
                        <a href="{{ route('services.index') }}" class="inline-flex items-center rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-medium text-white/90 transition hover:border-[#ffcc66]/60 hover:bg-white/10">
                            Services
                        </a>
                        <a href="{{ route('github.index') }}" class="inline-flex items-center rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-medium text-white/90 transition hover:border-[#ffcc66]/60 hover:bg-white/10">
                            GitHub
                        </a>
                        <a href="{{ route('videos.index') }}" class="inline-flex items-center rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-medium text-white/90 transition hover:border-[#ffcc66]/60 hover:bg-white/10">
                            Videos
                        </a>
                    </nav>
                </header>

                <main class="flex-1 py-10">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
