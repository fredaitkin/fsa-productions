<x-site-layout title="Login | FSA Productions">
    <h2 class="text-4xl font-semibold">Login</h2>
    <p class="mt-4 max-w-3xl text-white/75">Sign in to access protected features.</p>

    @if ($errors->any())
        <div class="mt-6 rounded-2xl border border-red-300/40 bg-red-500/15 p-4 text-sm text-red-100">
            <ul class="list-disc space-y-1 pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login.store') }}" method="POST" class="mt-8 max-w-xl space-y-5 rounded-2xl border border-white/10 bg-white/6 p-6">
        @csrf

        <div>
            <label for="email" class="mb-2 block text-sm font-semibold text-white/85">Email</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                class="w-full rounded-xl border border-white/20 bg-black/20 px-4 py-3 text-white outline-none transition focus:border-[#ffcc66]/80"
                placeholder="you@example.com"
                required
                autofocus
            >
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-semibold text-white/85">Password</label>
            <input
                id="password"
                name="password"
                type="password"
                class="w-full rounded-xl border border-white/20 bg-black/20 px-4 py-3 text-white outline-none transition focus:border-[#ffcc66]/80"
                required
            >
        </div>

        <label class="inline-flex items-center gap-3 text-sm text-white/80">
            <input type="checkbox" name="remember" value="1" class="h-4 w-4 rounded border-white/30 bg-black/30 text-[#ffcc66] focus:ring-[#ffcc66]">
            Remember me
        </label>

        <button type="submit" class="inline-flex rounded-full bg-[#ffcc66] px-6 py-3 font-semibold text-[#08111f] transition hover:bg-[#ffd98a]">
            Login
        </button>
    </form>
</x-site-layout>
