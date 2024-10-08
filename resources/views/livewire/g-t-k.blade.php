<div class="container my-10">
    <h3 class="text-center md:text-left mx-0 md:mx-20 mt-6 text-2xl">Guru dan Tenaga Kependidikan</h3>
    <hr class="border-b-4 mx-4 md:mx-20 mb-5">

    <div class="grid grid-cols-1 mx-20 mt-16 mb-8">
        {{-- Card Pertama --}}
        @if($educators->isNotEmpty())
            @php $firstEducator = $educators->first(); @endphp
            <div class="flex flex-col mx-auto items-center bg-white border border-gray-200 rounded-lg p-10 shadow-md w-full max-w-[230px] transform transition-transform duration-300 hover:scale-105">
                <img class="w-32 h-32" src="{{ asset('storage/' . $firstEducator->foto_gtk) }}" alt= "{{ $firstEducator->nama_gtk }}">
                <h2 class="text-lg font-semibold text-center mt-8">{{ $firstEducator->nama_gtk }}</h2>
                <p class="text-gray-500 text-center">{{ $firstEducator->posisi_gtk }}</p>
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-16 mx-20 mt-16 mb-32">
        {{--Card selain yang pertama --}}
        @foreach($educators->slice(1) as $educator) 
            <div class="flex flex-col mx-auto items-center bg-white border border-gray-200 rounded-lg p-10 shadow-md w-full max-w-[230px] transform transition-transform duration-300 hover:scale-105">
                <img class="w-32 h-32" src="{{ asset('storage/' . $educator->foto_gtk) }}" alt= "{{ $educator->nama_gtk }}">
                <h2 class="text-lg font-semibold text-center mt-8">{{ $educator->nama_gtk }}</h2>
                <p class="text-gray-500 text-center">{{ $educator->posisi_gtk }}</p>
            </div>
        @endforeach
    </div>
</div>

