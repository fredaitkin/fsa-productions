<div>
    <label for="code" class="mb-2 block text-sm font-semibold text-white/85">Video Code</label>
    <input
        id="code"
        name="code"
        type="text"
        maxlength="20"
        value="{{ old('code', $video->code ?? '') }}"
        class="w-full rounded-xl border border-white/20 bg-black/20 px-4 py-3 text-white outline-none transition focus:border-[#ffcc66]/80"
        placeholder="e.g. 7cI6OJEYlbs"
        required
    >
</div>

<div>
    <label for="title" class="mb-2 block text-sm font-semibold text-white/85">Title</label>
    <input
        id="title"
        name="title"
        type="text"
        maxlength="100"
        value="{{ old('title', $video->title ?? '') }}"
        class="w-full rounded-xl border border-white/20 bg-black/20 px-4 py-3 text-white outline-none transition focus:border-[#ffcc66]/80"
        placeholder="Video title"
        required
    >
</div>

<div>
    <label for="description" class="mb-2 block text-sm font-semibold text-white/85">Description (optional)</label>
    <textarea
        id="description"
        name="description"
        rows="4"
        class="w-full rounded-xl border border-white/20 bg-black/20 px-4 py-3 text-white outline-none transition focus:border-[#ffcc66]/80"
        placeholder="Brief description"
    >{{ old('description', $video->description ?? '') }}</textarea>
</div>

<div class="flex gap-3">
    <button type="submit" class="inline-flex rounded-full bg-[#ffcc66] px-6 py-3 font-semibold text-[#08111f] transition hover:bg-[#ffd98a]">
        {{ $buttonLabel }}
    </button>
    <a href="{{ route('videos.index') }}" class="inline-flex rounded-full border border-white/15 bg-white/5 px-6 py-3 font-semibold text-white/90 transition hover:border-white/30 hover:bg-white/10">
        Cancel
    </a>
</div>
