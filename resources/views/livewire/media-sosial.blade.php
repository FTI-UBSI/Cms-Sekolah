<div>
    <h3 class="text-lg-right sm:mx-8 lg:mx-20 mt-6 text-2xl">Medsos</h3>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mb-6">
    <h3 class="text-lg-right sm:mx-8 lg:mx-20 mt-6 ">Youtube</h3>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mb-3">
  
    <div>
        <div class="flex grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 sm:mx-8 lg:mx-20 mt-4 mb-4 justify-center">
    
          @foreach ($Medsos as $medso)
            <div class="text-center h-80 w-96">
  
                <iframe src="https://www.youtube.com/embed/{{ $medso->video_link }}" frameborder="0" class="size-full" allowfullscreen></iframe>
  
            </div>
          
          @endforeach 
    
        </div>
  
    </div>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mt-3 mb-1">
  
    <h3 class="text-lg-right sm:mx-8 lg:mx-20 mt-6 ">Instagram</h3>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mb-3">
    <div>
        <div class="flex grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2 sm:mx-8 mx-20 mt-4 mb-4 text-center justify-center">
  
          @foreach ($MediaSosial as $Sosial )
          <div class="text-center transform transition-transform duration-300 hover:scale-95">
            
            <a href="{{ $Sosial->Instagram_url }}" target="_blank">
              <img src="{{ asset('storage/'.$Sosial->gambarinstagram_cover)}}" alt="Postingan Instagram" class="sm:h-full sm:w-60 lg:h-72 lg:w-64"></img>
            </a>
          
          </div>
          @endforeach
        </div>
    </div>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mt-3 mb-1">
  
    <h3 class="text-lg-right sm:mx-8 lg:mx-20 mt-6 ">Facebook</h3>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mb-3">
    <div>
        <div class="flex grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-2 sm:mx-8 lg:mx-20 mt-4 mb-4 justify-center">
  
            @foreach ($MediaSosial as $Sosial )
            <div class="rounded-lg text-center transform transition-transform duration-300 hover:scale-95 border-amber-400">
              
              <a href="{{ $Sosial->Facebook_url }}" target="_blank">
                <img src="{{ asset('storage/'.$Sosial->gambarfacebook_cover)}}" alt="Postingan Instagram" class="sm:h-full sm:w-60 lg:h-72 lg:w-64"></img>
              </a>
            
            </div>
            @endforeach
        </div>
    </div>
    <hr class="border-b-4 sm:mx-8 mx-20 mt-3 mb-6">
  
    {{-- pagination --}}
    {{-- <div class=" sm:mx-8 mx-20 mt-2 mb-6 text-right ">
        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
          <a href="#" class="size-8 justify-center relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Previous</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
            </svg>
          </a>
          <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
          <a href="#" aria-current="page" class="size-8 justify-center relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-xs font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
          <a href="#" class="size-8 justify-center relative inline-flex items-center px-4 py-2 text-xs font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
          <a href="#" class="size-8 justify-center relative hidden items-center px-4 py-2 text-xs font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
          <span class="size-8 justify-center relative inline-flex items-center px-4 py-2 text-xs font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
          <a href="#" class="size-8 justify-center relative inline-flex items-center px-4 py-2 text-xs font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
          <a href="#" class="size-8 justify-center relative inline-flex items-center rounded-r-md px-2 py-2 text-xs text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only size-8 justify-center">Next</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
            </svg>
          </a>
        </nav>
      </div> --}}
    {{-- end pagination --}}
  
  
  </div>
  