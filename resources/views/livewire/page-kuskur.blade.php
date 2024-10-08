<div class="container mx-auto px-4 py-8">
    @foreach ($background->skip(2)->take(1) as $item)
    <div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $item->image_cover) }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>

        <!-- Title -->
        <div class="relative flex items-center justify-start h-full">
            <h1 class="ml-6 text-white text-4xl mt-48 font-bold">{{ $item->title }}</h1>
        </div>   
    </div>
    @endforeach 
    <!-- Grid layout with gaps -->
    <div class="mt-6 grid grid-cols-1 gap-8">
        @foreach ($Kuskur as $item)
        <!-- Card with spacing around image -->
        <div data-aos="fade-up" data-aos-duration="1500" class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex">
                <!-- Text content on the left -->
                <div class="w-2/3 p-6">
                    <h3 class="text-xl font-bold mb-2 transform transition-transform duration-300 hover:scale-105">{{ $item->title }}</h3>
                    <p class="text-gray-700 mb-4">{{ $item->description }}</p>
                </div>
                <!-- Image on the right -->
                <div class="w-1/3 p-4 transform transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('storage/' . $item->image_cover) }}" alt="Image" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
        </div>        
        @endforeach
    </div>

    <!-- Buttons section -->
    <div class="flex space-x-4 mt-8 justify-start"data-aos="fade-right" data-aos-duration="1500">
        <a href="{{ route($item->button_link1) }}" class="bg-blue-900 text-white py-2 px-4 rounded hover:bg-green-600 transform transition-transform duration-300 hover:scale-105">
            {{ $item->button_text1 }}
        </a>
        <a href="{{ route($item->button_link2) }}" class="bg-blue-900 text-white py-2 px-4 rounded hover:bg-green-600 transform transition-transform duration-300 hover:scale-105">
            {{ $item->button_text2 }}
        </a>
    </div>
</div>
