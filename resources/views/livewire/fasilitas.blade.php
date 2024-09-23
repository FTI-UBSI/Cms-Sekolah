<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Card Blog -->
    <div class="max-w-[85rem] mx-auto py-10 sm:py-14 lg:py-20">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-8 lg:mb-10">
            <h1 class="text-3xl font-bold md:text-4xl md:leading-tight dark:text-white">Fasilitas</h1>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-4">
            @foreach ($facility as $item)
                <!-- Card -->
                <a class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10 "
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-t-xl h-64"
                            src="{{ asset('storage/' . $item->image) }}"
                            alt="{{ $item->name }}">
                    </div>
                    <h1
                        class="text-3xl rounded-b-xl font-bold text-center text-slate-100 dark:text-neutral-300 dark:hover:text-white bg-slate-900 h-20 flex items-center justify-center">
                        {{ $item->name }}
                    </h1>
                </a>
                <!-- End Card -->
            @endforeach
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
</div>

