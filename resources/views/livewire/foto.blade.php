<div>
    <section class="relative bg-white dark:bg-gray-900 p-16">
        <div class="mb-20">
            <div class="text-center text-4xl font-bold mb-10">Galeri Sekolah</div>
            <div class="grid grid-cols-4 gap-5 mb-5">
                @foreach ($foto as $index => $item)
                @if ($index % 7 == 0)
                <div class="relative overflow-hidden bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl">
                    <!-- Gambar di latar belakang -->
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="absolute inset-0 w-full h-full object-cover rounded-lg z-0">

                    <!-- Konten overlay di atas gambar -->
                    <a href="" class="relative z-10 flex justify-center items-center w-full h-full bg-opacity-0 bg-slate-500 hover:bg-opacity-70 duration-100 cursor-pointer">
                        {{ $item->title }}
                    </a>
                </div>

                @elseif ($index % 7 == 1)
                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl col-span-2">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"class="w-full h-full object-cover rounded-lg">

                </div>
                @elseif ($index % 7 == 2)

                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"class="w-full h-full object-cover rounded-lg">

                </div>
                @elseif ($index % 7 == 3)

                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl col-span-3">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"class="w-full h-full object-cover rounded-lg">

                </div>
                @elseif ($index % 7 == 4)

                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"class="w-full h-full object-cover rounded-lg">

                </div>
                @elseif ($index % 7 == 5)

                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"class="w-full h-full object-cover rounded-lg">

                </div>
                @elseif ($index % 7 == 6)

                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl col-span-3">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"class="w-full h-full object-cover rounded-lg">

                </div>
                @endif
                @endforeach
            </div>
            <div class="w-48 m-auto">
                {{ $foto->links() }}
            </div>
        </div>

        {{-- <div>
            <div class="text-center text-4xl font-bold mb-10">VIDEO</div>
            <div class="grid grid-cols-2 gap-x-5 gap-y-10">
                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl"></div>
                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl"></div>
                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl"></div>
                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl"></div>
                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl"></div>
                <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl"></div>
            </div>
        </div> --}}
    </section>
</div>
