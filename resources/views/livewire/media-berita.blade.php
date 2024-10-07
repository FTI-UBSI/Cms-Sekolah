<div>
    {{-- In work, do what you enjoy. --}}
    <h3 class="text-lg-right mx-20 mt-6 text-2xl">Berita</h3>
    <hr class="border-b-4 mx-20 mb-5">
        <div class="flex max-w-full mx-20 ">
          
          {{-- Berita Section --}}
          <div class="flex-2 mr-10 w-9/12">
            @foreach ($MediaBerita as $items)
  
              <div class="flex mb-5 border-4 border-white rounded-lg overflow-hidden bg-slate-100 drop-shadow-md transform transition-transform duration-300 hover:scale-95">
                <img src="{{ asset('storage/'. $items->image_cover)}}" alt="News Image" class="rounded-xl w-72 h-40 p-2 object-cover justify-center">
                <div class="p-2">
                  <h2 class="font-bold text-lg">{{ $items->title }}</h2>

                  <p class="line-clamp-5 hover:line-clamp-none text-justify">{{ $items->description }}</p>
                </div>
              </div>
  
            @endforeach
            </div>
                
          {{-- end Berita Section --}}   


          {{-- siderbar Section --}}
          <div class="flex-1 w-4/12 mb-6">
            @foreach ($MediaBerita->take(1) as $items)

            <div class="text-center mb-5 p-5 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md">
              <img src="{{ asset('storage/'. $items->foto_cover)}}" alt="profil Image" class="rounded-lg w-full h-auto mb-2.5">
              <h2 class="font-bold">{{ $items->nama }}</h2>
              <p class="text-justify">{{ $items->penjelasan }}</p>
            </div>

            @endforeach

            <div>
              <h3 class="border-b-4 mb-2 border-yellow-500 pl-2">Tautan</h3>
              <div class="mb-5 p-2 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md">
                <a href="#">CMS Sekolahku</a>
              </div>
            </div>

            <div>
              <h3 class="border-b-4 mb-2 border-yellow-500 pl-2">Arsip</h3>
                <ul>
                  <li class="mb-1 p-1 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md"><a href="#" class="p-2">2024</a></li>
                  <li class="mb-1 p-1 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md"><a href="#" class="p-2">2023</a></li>
                  <li class="mb-1 p-1 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md"><a href="#" class="p-2">2022</a></li>
                  <li class="mb-1 p-1 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md"><a href="#" class="p-2">2021</a></li>
                  <li class="mb-1 p-1 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md"><a href="#" class="p-2">2020</a></li>
                </ul>
            </div>

          </div>
          {{-- end siderbar Section --}}
        </div>
</div>
