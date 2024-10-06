<div class="container mx-auto px-4 py-8">
    <h2 class="text-center text-2xl font-bold mb-8">Metode Pembelajaran</h2>

    <!-- Grid layout with gaps -->
    <div class="grid grid-cols-1 gap-8">
        @foreach ($Metode as $item)
        <!-- Card with spacing around image -->
        <div data-aos="fade-up" class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex">
                <!-- Text content on the left -->
                <div class="w-2/3 p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $item->title }}</h3>
                    <p class="text-gray-700 mb-4">{{ $item->description }}</p>
                </div>
                <!-- Image on the right -->
                <div class="w-1/3 p-4">
                    <img src="{{ asset('storage/' . $item->image_cover) }}" alt="Image" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
        </div>        
        @endforeach
    </div>

    <!-- Buttons section -->
    <div class="flex space-x-4 mt-8 justify-start">
        <a href="{{ route($item->button_link1) }}" class="bg-blue-900 text-white py-2 px-4 rounded hover:bg-orange-600">
            {{ $item->button_text1 }}
        </a>
        <a href="{{ route($item->button_link2) }}" class="bg-blue-900 text-white py-2 px-4 rounded hover:bg-orange-600">
            {{ $item->button_text2 }}
        </a>
    </div>
</div>
