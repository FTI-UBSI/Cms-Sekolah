<div class="container mx-auto px-4 py-8">
    @foreach ($background->skip(4)->take(1) as $item)
    <div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $item->image_cover) }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>

        <!-- Title -->
        <div class="relative flex items-center justify-start h-full">
            <h1 class="ml-6 text-white text-4xl mt-48 font-bold">{{ $item->title }}</h1>
        </div>   
    </div>
    @endforeach
    <!-- Grid container untuk card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach ($prosus as $index => $item)
        <div class="bg-white shadow-md rounded-lg p-6" data-aos="fade-up" 
        data-aos-delay="{{ 500 * $index }}" 
        data-aos-duration="1000">
            <div class=" transform transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('storage/' . $item->image_cover) }}" alt="Design Grafis" class="w-full h-40 object-cover mb-4 rounded">
                <h2 class="text-xl font-bold text-center text-indigo-600 mb-2">{{ $item->title }}</h2>
                <p class="text-center whitespace-pre-wrap text-gray-700 mb-6">{{ $item->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
