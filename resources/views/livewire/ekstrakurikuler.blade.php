<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Loop through each category -->
    @foreach ($extracurricular as $categoryTitle => $items)
        <section class="max-w-[85rem] py-10 sm:py-14 lg:py-20 mx-auto">
            <!-- Title Section -->
            <div class="max-w-full mx-auto text-left mb-8 lg:mb-10">
                <h1 class="text-3xl font-bold md:text-4xl md:leading-tight dark:text-white">{{ $categoryTitle }}</h1>
            </div>
            <!-- End Title Section -->

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @foreach ($items as $item)
                    <!-- Card -->
                    <a class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10 "
                        href="#">
                        <div class="aspect-w-16 aspect-h-10">
                            <img class="w-full object-cover rounded-t-xl h-64"
                                src="{{ asset('storage/' . $item['image']) }}"
                                alt="{{ $item['title'] }}">
                        </div>
                        <h1
                            class="text-3xl rounded-b-xl font-bold text-center text-slate-100 dark:text-neutral-300 dark:hover:text-white bg-slate-900 h-20 flex items-center justify-center">
                            {{ $item['title'] }}
                        </h1>
                    </a>
                    <!-- End Card -->
                @endforeach
            </div>
            <!-- End Grid -->
        </section>
    @endforeach
</div>

