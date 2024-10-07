
<div class="container my-10">
    <h3 class="text-lg-right mx-20 mt-6 text-2xl">Guru dan Tenaga Kependidikan</h3>
    <hr class="border-b-4 mx-20 mb-5">

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-16 mx-20 mt-16 mb-32">

    @foreach($educators as $educator) 

    <div class="flex flex-col mx-auto items-center bg-white border border-gray-200 rounded-lg p-10 shadow-md w-full max-w-[230px] transform transition-transform duration-300 hover:scale-105">
        <img class="w-32 h-32" src="{{ asset('storage/' . $educator->foto_gtk) }}" alt= "{{ $educator->nama_gtk }}">
        <h2 class="text-lg font-semibold text-center mt-8">{{ $educator->nama_gtk }}</h2>
        <p class="text-gray-500 text-center">{{ $educator->posisi_gtk }}</p>
    </div>

    @endforeach

</div>

</div>

