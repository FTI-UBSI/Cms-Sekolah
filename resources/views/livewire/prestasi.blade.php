<div class="container mx-auto my-10">
    <h3 class="text-lg-right mx-20 mt-6 text-2xl">Prestasi</h3>
    <hr class="border-b-4 mx-20 mb-5">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mx-20 mt-11 mb-32">
    @foreach($achievements as $achievement)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md h-[450px] transform transition-transform duration-300 hover:scale-105">
            <!-- Image -->
            @if($achievement->image)
                <img class="rounded-t-lg w-full h-64 object-cover" src="{{ asset('storage/'.$achievement->image) }}" alt="Achievement image">
            @endif

            <div class="p-5">
                <!-- Date -->
                <p class="text-xs text-gray-500">{{ $achievement->created_at->format('d F Y') }}</p>

                <!-- Title -->
                <h5 class="mt-2 mb-4 text-xl font-bold tracking-tight text-gray-900">{{ $achievement->judul }}</h5>

                <!-- Level -->
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    <p class="ml-2">{{ $achievement->tingkat }}</p>
                </div>

                <!-- Name -->
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    <p class="ml-2">{{ $achievement->nama_siswa }}</p>
                </div>

                <!-- Award -->
                <div class="flex items-center ">
                    <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L8.93 8.36l-6.36.92 4.6 4.48-1.09 6.33L12 16.9l5.91 3.1-1.09-6.33 4.6-4.48-6.36-.92L12 2z"/>
                    </svg>
                    <p class="ml-2">{{ $achievement->peringkat }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>