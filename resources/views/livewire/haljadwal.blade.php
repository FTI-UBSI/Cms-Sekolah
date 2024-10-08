<div class="container mx-auto px-4 py-8">
    <h2 class="text-lg-right font-bold text-blue-900  mx-20 mt-6 mb-2 text-2xl">JADWAL PPDB</h2>
    <hr class="border-gray-300 ml-16 mb-4">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
        @foreach($jadwal as $item)
        <div class="flex bg-white shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-lg hover:shadow-105-[0_8px_16px_-2px_rgba(0,0,128,0.6),_0_4px_8px_-2px_rgba(0,0,128,0.3)]">
            <div class="w-1/2">
                <img class="object-cover h-full w-full" src="{{ asset('storage/' . $item->image_cover) }}" alt="PPDB Image">
            </div>
            <div class="w-1/2 p-6 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-4">{{ $item->title }}</h2>
                <p class="text-gray-700 mb-4">{{ $item->description }}</p>
                
            </div>
        </div>
        @endforeach
        <div class="flex space-x-4">
            <a href="{{ route( $item->button_link1 ) }}" class="bg-blue-900 text-white py-2 px-4 rounded hover:bg-green-600">
                {{ $item->button_text1 }}
            </a>
            <a href="{{ route( $item->button_link2 ) }}" class="bg-blue-900 text-white py-2 px-4 rounded hover:bg-green-600">
                {{ $item->button_text2 }}
            </a>
        </div>
    </div>
</div>