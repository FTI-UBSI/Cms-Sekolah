{{-- auto-cols-max hover:auto-cols-min --}}
<div>
    <h3 class="text-lg-right mx-20 mt-6 text-2xl">Galeri Foto</h3>
    <hr class="border-b-4 mx-20 mb-5">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mx-20 m-t-5 m-b-5 justify-center content-center ">
        @foreach ($MediaFoto as $items )
            
        <div class="flex-1 p-2 text-center border-4 overflow-hidden border-white rounded-lg bg-slate-100 drop-shadow-md h-full transform transition-transform duration-300 hover:scale-95">
            <img src="{{ asset('storage/'. $items->image_cover)}}" alt="" class="rounded-lg w-full min-h-28 max-h-52 justify-center">

            <h2 class="pt-2 pb-2 md:text-xs lg:text-sm">{{ $items->title }}</h2>
            <details>
              <summary class="list-none cursor-default hover:text-yellow-500 border-none">Selengkapnya</summary>
              <div>
                  <p id="text" class="text-justify">{{ $items->description }}</p>
              </div>
            </details>
        </div>
        @endforeach


    </div>

    <hr class="border-b-4 mx-20 mt-6 mb-1">

    {{-- pagination --}}
    <div class=" mx-20 mt-2 mb-6 text-right ">
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
      </div>
    {{-- end pagination --}}

</div>


