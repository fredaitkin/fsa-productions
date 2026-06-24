<x-site-layout title="FSA Productions">
    @php
        $videos = ['Brand films', 'Promo edits', 'Behind-the-scenes coverage', 'Social-first content'];
    @endphp

    <section class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
        <div class="space-y-6">
            <span class="inline-flex rounded-full border border-[#ffcc66]/30 bg-[#ffcc66]/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-[#ffcc66]">
                Creative video studio
            </span>
            <h2 class="max-w-2xl text-5xl font-semibold tracking-tight text-white sm:text-6xl">
                Sharp visuals, clean edits, and stories built to land.
            </h2>
            <p class="max-w-xl text-lg leading-8 text-white/70">
                FSA Productions creates modern video work for brands, campaigns, and creators who need a homepage that feels confident and direct.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('services.index') }}" class="rounded-full bg-[#ffcc66] px-6 py-3 font-semibold text-[#08111f] transition hover:scale-[1.02] hover:bg-[#ffd98a]">Explore services</a>
                <a href="{{ route('videos.index') }}" class="rounded-full border border-white/15 bg-white/5 px-6 py-3 font-semibold text-white/90 transition hover:border-white/30 hover:bg-white/10">See video ideas</a>
            </div>
        </div>

        <div class="rounded-[2rem] border border-white/10 bg-white/8 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl">
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/45">Focus</p>
                    <p class="mt-3 text-2xl font-semibold">Production with intent</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/45">Delivery</p>
                    <p class="mt-3 text-2xl font-semibold">Fast, polished, flexible</p>
                </div>
            </div>

            <div class="mt-4 rounded-2xl border border-white/10 bg-gradient-to-br from-white/10 to-white/5 p-5">
                <p class="text-sm font-medium uppercase tracking-[0.28em] text-[#ffcc66]">What we make</p>
                <ul class="mt-4 grid gap-3 text-sm text-white/80 sm:grid-cols-2">
                    @foreach ($videos as $video)
                        <li class="rounded-full border border-white/10 bg-black/20 px-4 py-3">{{ $video }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</x-site-layout>