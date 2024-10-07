<div class="container ml-8 mx-auto py-12">
    <h2 class="text-3xl mb-6 mt-2 text-center text-blue-900 font-serif font-extrabold">SYARAT PPDB</h2>
    @foreach($syarat as $item)
    <!-- Card Container -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Text Section -->
            <div class="space-y-4 px-4 md:px-6 mx-auto">
                <h1 class="text-3xl mb-6 mt-6 text-start text-blue-900 font-serif font-extrabold">{{ $item->title }}</h1>
                <p class="whitespace-pre-wrap text-gray-700">{{ $item->description }}</p>
                <a href="{{ route( $item->button_link2 ) }}" class="inline-block bg-blue-900 text-white py-2 px-4 rounded hover:bg-green-600 transition">
                    {{ $item->button_text1 }}
                </a>
                <a href="{{ route( $item->button_link2 ) }}" class="inline-block bg-blue-900 text-white py-2 px-4 rounded hover:bg-green-600 transition">
                    {{ $item->button_text2 }}
                </a>
            </div>
            

            <!-- Image Section -->
            <div class="w-full">
                <img src="{{ Storage::url($item->image_cover) }}" alt="{{ $item->title }}" class="rounded-2xl object-cover w-full">
            </div>
        </div>
    </div>
    @endforeach
</div>