<div class="">
  <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "isAutoPlay": true
      }' class="relative">
      <div class="hs-carousel relative overflow-hidden w-full min-h-[600px] bg-white ">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
          
          @foreach($slider as $slide)
            <div class="hs-carousel-slide">
                <div class="flex flex-col justify-center h-full p-6" style="background-image: url('{{ asset('storage/' . $slide->image_cover) }}'); background-size: cover;">
                    <span data-aos="fade-up" class="place-items-start font-sans text-6xl text-white text-opacity-70 transition duration-700">{{ $slide->title }}</span>
                    <span data-aos="fade-up" class="place-items-start font-serif text-2xl text-white transition duration-700">{{ $slide->description }}</span>
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


    <section class="my-8" data-aos="fade-up"data-aos-duration="1500">
      <div class="container mx-auto">
          <h2 class="text-3xl mb-6 text-center text-blue-900 font-serif font-extrabold" data-aos="fade-up" data-aos-duration="1500">PENGUMUMAN SEKOLAH</h2>
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
                             style="background-image: url('{{ asset('storage/' . $slide->image_cover) }}'); background-size: cover; background-position: center; height: 100vh; width: 95vw;">
                            
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
    
    <div class="h-fit p-4 m-4 overflow-hidden">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="col-span-6 bg-white p-6 h-full rounded-lg shadow" data-aos="fade-right" data-aos-duration="2000">
          <h2 class="text-2xl font-bold mb-4 text-blue-700">{{ $video->title_video }}</h2>
          <div class="mb-4 h-[350px] rounded-md overflow-hidden">
            @if(isset($video))
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $video->video_link }}" frameborder="0" allowfullscreen></iframe>
            @else
                <p>Video tidak tersedia</p>
            @endif
          </div>
          <p class="text-gray-700 mb-4">{{ $video->description_video }}</p>
        </div>
        <div class="col-span-6 bg-white p-6 h-full rounded-lg shadow" data-aos="fade-left" data-aos-duration="2000">
          <h2 class="text-2xl font-bold mb-4 text-blue-700">Sekilas Berita</h2>
          @foreach ($news->take(3) as $item)
            <div class="grid grid-cols-12 gap-4">
              <!-- Image on the right -->
              <div class="col-span-4">
                <img src="{{ asset('storage/' . $item->image_cover) }}" alt="News Image" class="rounded-lg">
              </div>
              <!-- Text content on the left -->
              <div class="col-span-8">
                <h3 class="font-semibold text-lg">{{ $item->title }}</h3>
                <p class="text-gray-600 text-sm truncate">{{ $item->description }}</p>
                <a href="{{ route('Media-Berita') }}" class="text-blue-500 font-bold hover:text-blue-900">Baca selengkapnya</a>
                <!-- Upload date below the text -->
                <p class="text-gray-500 text-xs mt-2">Tanggal upload: {{ $item->created_at->format('d M Y') }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Testimoni Start -->
    <div class="max-w-7xl mx-auto py-12 overflow-hidden">
      <h2 class="text-3xl mb-6 text-center text-blue-900 font-serif font-extrabold" data-aos="fade-left"
      data-aos-duration="1500">TESTIMONI ORANGTUA</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($testimoni as $index => $item)
          <div class="bg-white shadow-md rounded-lg p-6 text-center transform transition-transform duration-300 hover:scale-105" >
            <div data-aos="fade-up" 
              data-aos-delay="{{ 500 * $index }}" 
              data-aos-duration="1000">
              <img src="{{ asset('storage/' . $item->image_cover) }}" alt="{{ $item->title }}" class="w-24 h-24 rounded-full mx-auto mb-4 " data-aos="zoom-in" data-aos-duration="2000">
              <h3 class="text-xl font-semibold">{{ $item->title }}</h3>
              <p class="text-gray-500 mt-2">{{ $item->description }}</p>
            </div> 
          </div>
        @endforeach
      </div>
    </div>
    <!-- Testimoni End -->
    <!-- Seragam Start -->
    <div class="container mx-auto my-5">
      <h2 class="text-3xl mb-6 text-center text-blue-900 font-serif font-extrabold " data-aos="fade-right"
      data-aos-duration="1500">SERAGAM SEKOLAH</h2>
  
      <!-- Baris pertama: 3 item -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
          @foreach ($seragam->take(3) as $index => $item) 
              <div class="bg-white card shadow-md rounded-lg overflow-hidden border border-gray-200 transform transition-transform duration-300 hover:scale-105" style="box-shadow: 0px 4px 6px rgba(137, 137, 181, 0.5);" >
                  <img src="{{ asset('storage/' . $item->image_cover) }}" class="w-full h-128 mt-3 object-cover"data-aos="fade-up" 
                  data-aos-delay="{{ 500 * $index }}" 
                  data-aos-duration="1000" alt="{{ $item->title }}">
                  <div class="p-4 text-center">
                      <h5 class="text-2xl font-bold text-blue-900">{{ $item->title }}</h5>
                  </div>
              </div>
          @endforeach
        </div>
      
      <!-- Baris kedua: 2 item -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-center ">
            @foreach ($seragam->skip(3)->take(3) as $index => $item) 
                <div class="bg-white card  rounded-lg overflow-hidden border border-gray-200 transform transition-transform duration-300 hover:scale-105 shadow-md" style="box-shadow: 0px 4px 6px rgba(137, 137, 181, 0.5);" >
                    <img src="{{ asset('storage/' . $item->image_cover) }}" class="w-full h-128 object-cover" data-aos="fade-up" 
                    data-aos-delay="{{ 500 * $index }}" 
                    data-aos-duration="1000" alt="{{ $item->title }}">
                    <div class="p-4 text-center">
                        <h5 class="text-2xl font-bold text-blue-900">{{ $item->title }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
      <div>
        <h1>Selamat Datang di Beranda!</h1>
        <h5>Total Pengunjung: {{ $viewCount->count }}</h5>
      </div>
    </div>
  </div>