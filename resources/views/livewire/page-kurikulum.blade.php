<div class="container mx-auto py-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            @foreach ($Kurikulum as $item)
                
            @endforeach
            <div>
                <h2 class="text-xl font-bold text-blue-900 mb-2">{{$item->title}}</h2>
                <hr class="border-gray-300 mb-4">
                <p class="text-gray-700">
                    {{$item->description}}
                </p>
            </div>
    
            <!-- Image Section -->
            <div class="flex justify-center">
                <img class="w-80 h-auto transform transition-transform duration-300 hover:scale-105" src="{{ asset('storage/' . $item->image_cover) }}" alt="BSI Logo">
            </div>        
        </div>
    </div>

    <div class="mt-16 grid grid-cols-1 lg:grid-cols-2 gap-4">
        @foreach ($point as $index => $item)
            <div class="bg-white rounded-lg shadow-lg p-6" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ 500 * $index }}" 
                 data-aos-duration="1000">
                <h2 class="text-center text-xl font-bold text-blue-800 mb-4">{{ $item->title }}</h2>
                <div class="flex flex-col lg:flex-row justify-between">
                    <!-- Deskripsi -->
                    <div class="flex-1 mb-4 lg:mb-0">
                        <p class="whitespace-pre-line">{{ $item->description }}</p>
                    </div>
                    <!-- Gambar dan Tombol -->
                    <div class="flex flex-col items-center lg:items-center lg:self-center lg:ml-4">
                        <img src="{{ asset('storage/' . $item->image_cover) }}" alt="Struktur Image" class="w-52 h-36 object-cover rounded-lg mb-4">
                        <a href="{{ route( $item->button_link ) }}" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-green-500 transition duration-200">{{ $item->button_text }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>