<x-site-layout title="Videos | FSA Productions">
    <h2 class="text-4xl font-semibold">Videos</h2>
    <p class="mt-4 max-w-3xl text-white/75">Library of sample videos.</p>
    @if ($canManageVideos)
        <a href="{{ route('videos.create') }}" class="mt-6 inline-flex rounded-full bg-[#ffcc66] px-5 py-2 font-semibold text-[#08111f] transition hover:bg-[#ffd98a]">
            Add Video
        </a>
    @endif

    @if (session('status'))
        <p class="mt-4 rounded-xl border border-[#ffcc66]/40 bg-[#ffcc66]/15 px-4 py-3 text-sm text-[#ffdfa0]">
            {{ session('status') }}
        </p>
    @endif

    <ul class="mt-8 grid gap-6 sm:grid-cols-2">
        @forelse ($videos as $video)
            <li class="rounded-2xl border border-white/10 bg-white/6 p-4 text-white/85">
                <details class="mt-3">
                    <summary class="list-none">
                        <p class="inline-flex cursor-pointer items-center gap-2 text-lg font-semibold text-white">
                            {{ $video->title }}
                            <span class="text-white/70" aria-hidden="true">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 5L14 10L7 15V5Z" />
                                </svg>
                            </span>
                        </p>
                    </summary>
                    @if ($video->description)
                        <p class="mt-2 text-sm text-white/70">{{ $video->description }}</p>
                    @endif
                    <div class="mt-3 aspect-video overflow-hidden rounded-xl border border-white/10 bg-black/30">
                        <iframe
                            class="h-full w-full"
                            src="https://www.youtube.com/embed/{{ $video->code }}"
                            title="{{ $video->title }}"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </details>
            </li>
        @empty
            <li class="rounded-2xl border border-white/10 bg-white/6 p-4 text-white/75">
                No videos added yet.
            </li>
        @endforelse
    </ul>
</x-site-layout>