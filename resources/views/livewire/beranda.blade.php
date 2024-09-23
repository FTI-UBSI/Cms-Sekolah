<div>
    {{-- Start Header Section --}}
    <header>
        <!-- Grid -->
        @foreach ($slider as $item)
            <div class="grid lg:grid-cols-2 gap-4 md:gap-8 xl:gap-12 md:items-center">
                <div class="space-y-10 ml-12 lg:ml-24">
                    <h1
                        class="block text-4xl font-bold text-gray-800 sm:text-5xl lg:text-6xl lg:leading-tight dark:text-white">
                        {{ $item->title }}
                    </h1>
                    <p class="mt-3 text-xl font-semibold text-gray-500 dark:text-neutral-400">{!! $item->description !!}</p>

                    <!-- Buttons -->
                    <div class="mt-6 grid gap-3 w-full sm:inline-flex">
                        <a class="py-3 px-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            href="{{ $item->button_link }}">
                            {{ $item->button_text }}
                        </a>
                        <a class="py-3 px-8 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-sky-600 bg-inherit text-sky-600 shadow-sm hover:bg-sky-50 focus:outline-none focus:bg-sky-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="#">
                            Kontak
                        </a>
                    </div>
                    <!-- End Buttons -->
                </div>
                <!-- End Col -->

                <div class="relative hidden sm:block self-end lg:justify-end ">
                    <img class="w-full object-cover" src="{{ asset('storage/' . $item->image_cover) }}"
                        alt="Hero Image">
                </div>
                <!-- End Col -->
            </div>
        @endforeach
        <!-- End Grid -->
    </header>
    {{-- End Header Section --}}

    {{-- Start Agenda Section --}}
    <section class="relative bg-zinc-50 py-20">
        <!-- Icon Blocks -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <h1 class="text-4xl ml-12 lg:ml-36 text-slate-800 font-bold text-left mb-16">Agenda Bulan
                {{ $month }}
            </h1>
            <!-- Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($agenda as $item)
                    <!-- Icon Block -->
                    <div
                        class="h-36 sm:h-56 flex flex-col justify-center bg-white border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">

                        <div
                            class="flex justify-center font-bold text-white items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                            {{ \Carbon\Carbon::parse($item->date)->format('d') }}
                        </div>


                        <div class="mt-3">
                            <h3 class="text-sm sm:text-lg font-bold text-gray-800 dark:text-neutral-200"
                                title="{{ $item->title }}">
                                {!! Str::limit($item->title, 20) !!}
                            </h3>

                            <hr class="my-4 border-violet-600 dark:border-neutral-600 w-20 mx-auto">

                            <p class="mt-1.5 text-xs sm:text-sm text-gray-500 dark:text-neutral-400">
                                {!! Str::limit($item->description, 100) !!}</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                @endforeach
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Icon Blocks -->
    </section>
    {{-- End Agenda Section --}}

    <!-- Start Ekstrakurikuler Slider -->
    <section data-hs-carousel='{ "loadingClasses": "opacity-0"}' class="relative">
        <div class="hs-carousel relative overflow-hidden w-full  min-h-96 bg-red-100 py-20">
            <h1 class="text-4xl ml-12 lg:ml-36 text-slate-800 font-bold text-left mb-16">Ekstrakurikuler
            </h1>
            <div class="hs-carousel relative w-full h-44 bg-red-100  rounded-lg">
                <div
                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    @php $counter = 0; @endphp

                    @foreach ($extracurricular as $item)
                        @if ($item->is_active)
                            {{-- Mulai slide baru setiap 3 card --}}
                            @if ($counter % 3 == 0)
                                @if ($counter > 0)
                                    {{-- Jangan tutup slide sebelum slide pertama --}}
                </div> <!-- Tutup slide sebelumnya -->
                @endif

                <div class="hs-carousel-slide w-full">
                    <div class="flex justify-center mx-8 h-full bg-red-100 dark:bg-neutral-900 items-center">
                        @endif
                        {{-- Card untuk setiap item --}}
                        <div
                            class="bg-white  rounded-lg mx-12 shadow-lg p-2 w-96 flex items-center justify-center h-44">
                            <div class="flex items-center justify-center">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="rounded-md w-24 h-24 object-contain mr-3">
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white">{{ $item->title }}
                                    </h3>
                                    {{-- <p class="text-xs text-gray-600 dark:text-gray-400">{{ Str::limit($item->description, 50) }} --}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @php $counter++; @endphp

                        {{-- Tutup slide setelah 3 card --}}
                        @if ($counter % 3 == 0 || $loop->last)
                    </div>
                    @endif
                    @endif
                    @endforeach

                    @if ($counter % 3 != 0)
                        {{-- Tutup slide terakhir jika kurang dari 3 card --}}
                </div>
                @endif

            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>
    </section>
    <!-- End Ekstrakurikuler Slider -->

    <!-- Start News Slider -->
    <section data-hs-carousel='{ "loadingClasses": "opacity-0"}' class="relative">
        <div class="hs-carousel relative overflow-hidden w-full  min-h-96 bg-inherit py-20">
            <h1 class="text-4xl ml-12 lg:ml-36 text-slate-800 font-bold text-left mb-16">Berita
            </h1>
            <div class="hs-carousel relative w-full h-96 bg-inherit rounded-lg">
                <div
                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    @php $counter = 0; @endphp

                    @foreach ($news as $item)
                        @if ($item->is_active)
                            {{-- Mulai slide baru setiap 3 card --}}
                            @if ($counter % 3 == 0)
                                @if ($counter > 0)
                                    {{-- Jangan tutup slide sebelum slide pertama --}}
                </div> <!-- Tutup slide sebelumnya -->
                @endif

                <div class="hs-carousel-slide w-full">
                    <div class="flex justify-center mx-8 h-full bg-inherit dark:bg-neutral-900 items-center">
                        @endif
                        <!-- Card -->
                        <div class="group flex flex-col items-center w-full md:w-1/3 p-4 md:p-5 focus:outline-none">
                            <!-- Responsive card -->
                            <div class="relative w-full h-auto pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                                <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                    src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                            </div>
                            <div class="px-4 py-6">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    {{ $item->title }}
                                </h3>
                                <p class="mt-3 text-gray-800 dark:text-neutral-200">
                                    {!! Str::limit($item->description, 150) !!}
                                </p>
                                <p
                                    class="mt-5 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
                                    Selengkapnya
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                        <!-- End Card -->

                        @php $counter++; @endphp

                        {{-- Tutup slide setelah 3 card --}}
                        @if ($counter % 3 == 0 || $loop->last)
                    </div>
                    @endif
                    @endif
                    @endforeach

                    @if ($counter % 3 != 0)
                        {{-- Tutup slide terakhir jika kurang dari 3 card --}}
                </div>
                @endif

            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>
    </section>
    <!-- End News Slider -->


</div>

