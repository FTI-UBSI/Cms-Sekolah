<div class="container mx-auto my-10">
    <h3 class="text-lg-right mx-20 mt-6 text-2xl">Fasilitas</h3>
    <hr class="border-b-4 mx-20 mb-5">

    <!-- Card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-4 px-4 sm:px-8 lg:px-20 mt-11 mb-32 ">

        @foreach($facility as $item) 

        <a class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10 transform transition-transform duration-300 hover:scale-105 max-w-screen-lg mx-auto">
            {{-- href="#"> --}}
            <div class="aspect-auto">
                <img class="w-full object-cover rounded-t-xl h-64"
                    src="{{ asset('storage/' . $item->image) }}"
                    alt="{{ $item->name }}">
            </div>
                <h1
                    class="text-xl sm:text-2xl lg:text-3xl rounded-b-xl font-bold text-center text-slate-100 dark:text-neutral-300 dark:hover:text-white bg-slate-900 h-20 flex items-center justify-center">
                    {{ $item->name }}
                </h1>
        </a>

        @endforeach
    
    </div>
    <!-- End Card -->
</div>
