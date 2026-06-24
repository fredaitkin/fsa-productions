<x-site-layout title="Videos | FSA Productions">
    <h2 class="text-4xl font-semibold">Videos</h2>
    <p class="mt-4 max-w-3xl text-white/75">Library of sample videos.</p>

    <ul class="mt-8 grid gap-6 sm:grid-cols-2">
        @foreach ($videos as $video => $title)
            <li class="rounded-2xl border border-white/10 bg-white/6 p-4 text-white/85">
                <details class="mt-3">
                    <summary class="list-none">
                        <p class="inline-flex cursor-pointer items-center gap-2 text-lg font-semibold text-white">
                            {{ $title }}
                            <span class="text-white/70" aria-hidden="true">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 5L14 10L7 15V5Z" />
                                </svg>
                            </span>
                        </p>
                    </summary>
                    <div class="mt-3 aspect-video overflow-hidden rounded-xl border border-white/10 bg-black/30">
                        <iframe
                            class="h-full w-full"
                            src="https://www.youtube.com/embed/{{ $video }}"
                            title="{{ $title }}"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </details>
            </li>
        @endforeach
    </ul>
</x-site-layout>