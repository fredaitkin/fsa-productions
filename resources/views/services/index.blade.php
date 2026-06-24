<x-site-layout title="Services | FSA Productions">
    <h2 class="text-4xl font-semibold">Services</h2>
    <p class="mt-4 max-w-3xl text-white/75">FSA Productions offers production planning, video production, and post-production services.</p>

    <section class="mt-8 grid gap-4 md:grid-cols-3">
        @foreach ($services as $service)
            <article class="rounded-3xl border border-white/10 bg-white/6 p-6 backdrop-blur-sm">
                <p class="text-sm uppercase tracking-[0.3em] text-[#ffcc66]">Service</p>
                <h3 class="mt-4 text-2xl font-semibold">{{ $service['title'] }}</h3>
                <p class="mt-3 leading-7 text-white/70">{{ $service['description'] }}</p>
            </article>
        @endforeach
    </section>
</x-site-layout>