<x-site-layout title="Edit Video | FSA Productions">
    <h2 class="text-4xl font-semibold">Edit Video</h2>
    <p class="mt-4 max-w-3xl text-white/75">Update an existing video entry.</p>

    @if ($errors->any())
        <div class="mt-6 rounded-2xl border border-red-300/40 bg-red-500/15 p-4 text-sm text-red-100">
            <p class="font-semibold">Please fix the following:</p>
            <ul class="mt-2 list-disc space-y-1 pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videos.update', $video->id) }}" method="POST" class="mt-8 space-y-5 rounded-2xl border border-white/10 bg-white/6 p-6">
        @csrf
        @method('PATCH')
        @include('videos._form', ['buttonLabel' => 'Update Video'])
    </form>
</x-site-layout>
