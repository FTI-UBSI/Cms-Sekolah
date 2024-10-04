
<div class="container mx-auto py-8">
    <h3 class="text-lg-right font-bold text-blue-900  mx-20 mt-6 mb-2 text-2xl">EKSTRAKULIKULER</h3>
    <hr class="border-gray-300 mb-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
         @foreach ($eskul as $item)
         <div class="bg-white shadow-md rounded-md overflow-hidden transform transition-transform duration-300 hover:scale-105">
             <img class="w-full h-FULL object-cover " src="{{ asset('storage/' . $item->image_cover) }}" alt="{{ $item->title }}">
             <div class="bg-blue-900 text-white text-center py-3">
                 <h3 class="text-lg font-bold">{{ $item->title }}</h3>
             </div>
         </div>
         @endforeach
     </div>

     <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
             <!-- Text Section -->
             <div>
                 <h2 class="text-xl font-bold text-blue-900 mb-2">Kurikulum</h2>
                 <hr class="border-gray-300 mb-4">
                 <p class="text-gray-700">
                     Kurikulum SMK Bina Sarana Informatika dirancang untuk mempersiapkan siswa menjadi tenaga profesional di bidang teknologi informasi, dengan fokus pada keterampilan praktis yang dibutuhkan dalam dunia kerja.
                 </p>
             </div>
     
             <!-- Image Section -->
             <div class="flex justify-center">
                 <img class="w-64 h-auto" src="path_to_your_image/logo.png" alt="BSI Logo">
             </div>
        </div>
     </div>
     
 </div>
 