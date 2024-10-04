<div class="container mx-auto py-12">
    <h2 class="text-3xl mb-6 mt-6 text-center text-blue-900 font-serif font-extrabold">ALUR</h2>
    @foreach($alurppdb as $item)
    <div class="flex items-center bg-white shadow-lg rounded-lg p-6 mb-10">
        <!-- Image Section -->
        <div class="w-1/2">
            <div class="relative flex justify-center">
                <!-- Gambar bulat -->
                <img src="{{ Storage::url($item->image_cover) }}" alt="{{ $item->title }}" class="rounded 1/2 object-cover">
                <!-- Lingkaran dekoratif -->
                <div class="absolute top-0 left-0 w-10 h-10 bg-blue-900 rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-10 h-10 bg-blue-900 rounded-full"></div>
            </div>
        </div>
        <!-- Content Section -->
        <div class="w-1/2 pl-8">
            <h2 class="text-3xl mb-6 mt-6 text-start text-blue-900 font-serif font-extrabold">{{ $item->title }}</h2>
            <p class="whitespace-pre-wrap text-gray-700 mb-6">{{ $item->description }}</p>
            <a href="{{ route( $item->button_link1 ) }}" class="inline-block bg-blue-900 text-white py-2 px-4 rounded hover:bg-orange-600 transition">
                {{ $item->button_text1 }}
            </a>
            <a href="{{ route( $item->button_link2 ) }}" class="inline-block bg-blue-900 text-white py-2 px-4 rounded hover:bg-orange-600 transition">
                {{ $item->button_text2 }}
            </a>
        </div>
    </div>
    @endforeach
</div>