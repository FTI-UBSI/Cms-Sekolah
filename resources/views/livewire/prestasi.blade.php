<div class="container mx-auto my-10">
    <h3 class="text-lg-right mx-20 mt-6 text-2xl">Prestasi</h3>
    <hr class="border-b-4 mx-20 mb-5">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ml-20 mt-11 mb-32">
    @foreach($achievements as $achievement)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg mr-20 shadow-md h-[450px] transform transition-transform duration-300 hover:scale-105">
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
                    @if($achievement->tingkat == 'Internasional')
                        <i data-feather="globe" class="text-yellow-500 w-6 h-6"></i>
                    @elseif($achievement->tingkat == 'Nasional')
                        <i data-feather="flag" class="text-yellow-500 w-6 h-6"></i>
                    @else
                        <i data-feather="award" class="text-yellow-500 w-6 h-6"></i>
                    @endif
                    <p class="ml-2">{{ $achievement->tingkat }}</p>
                </div>

                <!-- Name -->
                <div class="flex items-center mb-2">
                    <i data-feather="user" class="text-blue-500 w-6 h-6"></i>
                    <p class="ml-2">{{ $achievement->nama_siswa }}</p>
                </div>

                <!-- Award -->
                <div class="flex items-center mb-2">
                    @if($achievement->peringkat == '1 (Satu)' || $achievement->peringkat == 'Emas' || $achievement->peringkat == 'Pertama')
                        <!-- Icon Emas (Juara Pertama) -->
                        <i data-feather="award" class="text-yellow-500 w-6 h-6"></i>
                    @elseif($achievement->peringkat == '2 (Dua)' || $achievement->peringkat == 'Perak' || $achievement->peringkat == 'Kedua')
                        <!-- Icon Silver (Juara Kedua) -->
                        <i data-feather="award" class="text-gray-500 w-6 h-6"></i>
                    @elseif($achievement->peringkat == '3 (Tiga)' || $achievement->peringkat == 'Perunggu' || $achievement->peringkat == 'Ketiga')
                        <!-- Icon Bronze (Juara Ketiga) -->
                        <i data-feather="award" class="text-orange-900 w-6 h-6"></i>
                    @else
                        <!-- Icon Default untuk Juara di luar peringkat 1, 2, dan 3 -->
                        <i data-feather="award" class="text-gray-500 w-6 h-6"></i>
                    @endif
                    <p class="ml-2">{{ $achievement->peringkat }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>