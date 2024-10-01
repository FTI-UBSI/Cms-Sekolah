<div>
    {{-- Start Header Section --}}
    <header>
        <!-- Grid -->
        <!-- Slider -->
<!-- Slider -->
<div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true
  }' class="relative">
  <div class="hs-carousel relative overflow-hidden w-full min-h-[600px] bg-white ">
    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
      
      @foreach($slider as $slide)
      <div class="hs-carousel-slide">
        <div class="flex flex-col justify-center h-full p-6" style="background-image: url('{{ asset('storage/' . $slide->image_cover) }}'); background-size: cover; background-position: center;">
            <span class="place-items-start font-sans text-6xl text-white text-opacity-70 transition duration-700">{{ $slide->title }}</span>
            <span class="place-items-start font-serif text-2xl text-white transition duration-700">{{ $slide->description }}</span>
        </div>
    </div>
      @endforeach

    </div>
  </div>

  <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
    <span class="text-2xl" aria-hidden="true">
      <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m15 18-6-6 6-6"></path>
      </svg>
    </span>
    <span class="sr-only">Previous</span>
  </button>
  <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
    <span class="sr-only">Next</span>
    <span class="text-2xl" aria-hidden="true">
      <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </span>
  </button>

  <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
    @foreach($slider as $slide)
    <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
    @endforeach
  </div>
</div>
<!-- End Slider -->


<div>
    {{-- Start Header Section --}}
    <header>
        <!-- Existing HTML Slider and Other Sections -->

        <!-- Livewire Announcements Section -->
        <section class="my-8">
            <div class="container mx-auto">
                <h2 class="text-3xl  mb-6 text-center text-blue-900 font-serif font-extrabold">PENGUMUMAN SEKOLAH</h2>
                <div class="relative">
                    <div data-hs-carousel='{
                        "loadingClasses": "opacity-0",
                        "isAutoPlay": true
                      }' class="relative w-full h-screen"> <!-- ubah menjadi w-full dan h-screen -->
                      <div class="hs-carousel relative overflow-hidden w-full h-full bg-white"> <!-- ubah menjadi w-full dan h-full -->
                        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0 h-full"> <!-- ubah h-full -->
                          
                          @foreach($announcements as $slide)
                          <div class="hs-carousel-slide flex-grow w-full h-full">
                            <div class="flex flex-col justify-start items-center h-full p-6" 
                                 style="background-image: url('{{ asset('storage/' . $slide->image_cover) }}'); background-size: cover; background-position: center; height: 100vh; width: 100vw;">
                                
                                <!-- Card putih transparan di belakang judul, deskripsi, dan tombol -->
                                <div class="bg-white bg-opacity-70 rounded-lg p-6 text-center max-w-[100%] md:max-w-[80%]">
                                    
                                    <!-- Judul -->
                                    <span class="font-serif text-5xl text-bold text-blue-900  transition duration-700 leading-snug">
                                        {{ $slide->title }}
                                    </span>
                                    <br><br><br>
                                    <!-- Deskripsi -->
                                    <span class="font-serif text-3xl text-black transition duration-700 leading-snug mt-4 block">
                                        {{ $slide->description }}
                                    </span>
                                    <br><br><br>
                                    
                                    <!-- Tombol dengan button_text sebagai teks dan button_link sebagai link -->
                                    <a href="{{ $slide->button_link }}" class="mt-6 inline-block">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-500">
                                            {{ $slide->button_text }}
                                        </button>
                                    </a>
                        
                                </div>   
                            </div>
                        </div>
                        
                        
                          @endforeach
                    
                        </div>
                      </div>
                    
                      <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                        <span class="text-2xl" aria-hidden="true">
                          <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                          </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                      </button>
                      <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                        <span class="sr-only">Next</span>
                        <span class="text-2xl" aria-hidden="true">
                          <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                          </svg>
                        </span>
                      </button>
                    
                      <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                        @foreach($slider as $slide)
                        <span class="hs-carousel-active:bg-blue-900 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
                        @endforeach
                      </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Announcement Sections -->

         <!-- start Probis Sections -->
         <div class="container mx-auto p-4">
            @foreach($video as $item)
            <!-- Grid container -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Profil Video Section -->
                <div class="profil-section bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-4 text-blue-700">{{ $item->title_video }}</h2>
        
                    <!-- Ambil ID dari URL video, jika perlu -->
                    @php
                        if ($item->video_link) {
                            if (strpos($item->video_link, 'youtu.be') !== false) {
                                $url_components = parse_url($item->video_link);
                                $video_id = trim($url_components['path'], '/');
                            } elseif (strpos($item->video_link, 'youtube.com') !== false) {
                                $url_components = parse_url($item->video_link);
                                parse_str($url_components['query'] ?? '', $url_params);
                                $video_id = $url_params['v'] ?? null;
                            }
                        } else {
                            $video_id = null;
                        }
                    @endphp
        
                    <div class="video-wrapper mb-4 relative" style="padding-top: 56.25%; position: relative;">
                        @if(isset($video_id))
                            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0" allowfullscreen></iframe>
                        @else
                            <p>Video tidak tersedia</p>
                        @endif
                    </div>
        
                    <p class="text-gray-700 mb-4">{{ $item->description_video }}</p>
                </div>
        
                <!-- Berita Terbaru Section -->
               <!-- Berita end Section -->
            </div>
            @endforeach
        </div>
          <!-- End Probis Sections -->
        <!-- End Existing Sections -->
    </header>


     <!-- End Probis Sections -->
     <div class="max-w-7xl mx-auto py-12">
        <h2 class="text-3xl mb-6 text-center text-blue-900 font-serif font-extrabold">TESTIMONI ORANGTUA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimoni as $item)
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="{{ asset('storage/' . $item->image_cover) }}" alt="{{ $item->title }}" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">{{ $item->title }}</h3>
                <!-- Membatasi deskripsi menjadi satu baris dengan ellipsis -->
                <p class="text-gray-500 mt-2 truncate">{{ $item->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
    
    
    <!-- End Existing Sections -->


        <!-- Grid untuk seragam (Senin - Jumat) -->
        <div class="container mx-auto my-5">
            <h2 class="text-3xl mb-6 text-center text-blue-900 font-serif font-extrabold">SERAGAM SEKOLAH</h2>
        
            <!-- Baris pertama: 3 item -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                @foreach ($seragam->take(3) as $item) 
                    <div class="bg-white card shadow-md rounded-lg overflow-hidden border border-gray-200" style="box-shadow: 0px 4px 6px rgba(137, 137, 181, 0.5);">
                        <img src="{{ asset('storage/' . $item->image_cover) }}" class="w-full h-128 mt-3 object-cover" alt="{{ $item->title }}">
                        <div class="p-4 text-center">
                            <h5 class="text-2xl font-bold text-blue-900">{{ $item->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Baris kedua: 2 item -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-center ">
                @foreach ($seragam->skip(3)->take(3) as $item) 
                    <div class="bg-white card shadow-md rounded-lg overflow-hidden border border-gray-200" style="box-shadow: 0px 4px 6px rgba(137, 137, 181, 0.5);">
                        <img src="{{ asset('storage/' . $item->image_cover) }}" class="w-full h-128 object-cover" alt="{{ $item->title }}">
                        <div class="p-4 text-center">
                            <h5 class="text-2xl font-bold text-blue-900">{{ $item->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            
            
        </div>
        
        
    
    
    
    <!-- End Seragam Sections -->


        <!-- End Grid -->
    </header>

    {{-- End Header Section --}}

   


</div>

