<div>
    <!-- Struktur Organisasi -->
    <div class="max-w-screen-2xl mx-auto px-4 lg:px-8 mb-12 py-20">
    @foreach ($tendik as $item)
        <div class="max-w-screen-2xl mx-auto px-4 lg:px-8 mb-12">
            <h1 class="uppercase text-3xl font-bold text-left mb-6">{{ $item->name }}</h1>
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full mx-auto">
        </div>
    @endforeach
    </div>
</div>
