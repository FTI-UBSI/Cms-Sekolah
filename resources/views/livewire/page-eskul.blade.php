
<div class="container mx-auto px-4 py-8">
    @foreach ($background->skip(3)->take(1) as $item)
    <div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $item->image_cover) }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>

        <!-- Title -->
        <div class="relative flex items-center justify-start h-full">
            <h1 class="ml-6 text-white text-4xl mt-48 font-bold">{{ $item->title }}</h1>
        </div>   
    </div>
    @endforeach
    <hr class="border-gray-300 mb-4 ">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
         @foreach ($eskul as $index => $item)
         <div class="bg-white shadow-md rounded-md overflow-hidden" data-aos="fade-up" 
         data-aos-delay="{{ 500 * $index }}" 
         data-aos-duration="1000">
            <div class=" transform transition-transform duration-300 hover:scale-105">
                <img class="w-full h-FULL object-cover " src="{{ asset('storage/' . $item->image_cover) }}" alt="{{ $item->title }}">
                <div class="bg-blue-900 text-white text-center py-3">
                    <h3 class="text-lg font-bold">{{ $item->title }}</h3>
                </div>
            </div>
         </div>
         @endforeach
     </div>
 </div>
 