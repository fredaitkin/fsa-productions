<x-site-layout title="Videos | FSA Productions">
    @php
        $videos = ['Brand films', 'Promo edits', 'Behind-the-scenes coverage', 'Social-first content'];
    @endphp

    <h2 class="text-4xl font-semibold">Videos</h2>
    <p class="mt-4 max-w-3xl text-white/75">Sample content categories available for production and delivery.</p>

    <ul class="mt-8 grid gap-4 sm:grid-cols-2">
        @foreach ($videos as $video)
            <li class="rounded-2xl border border-white/10 bg-white/6 px-5 py-4 text-white/85">
                {{ $video }}
            </li>
        @endforeach
    </ul>
</x-site-layout>