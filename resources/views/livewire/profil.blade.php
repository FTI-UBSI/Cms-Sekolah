{{-- <livewire:profil /> --}}

<div>
    @foreach($about as $aboutus)

    <div class="relative">
        <!-- Bagian gambar -->
        {{-- <img src="{{ asset('images/profil/bangunan.jpg') }}" alt="Bangunan" class="w-full h-auto object-cover"> --}}
        <img src="{{ asset('storage/' . $aboutus->foto_about_us) }}" alt="Bangunan" class="w-full h-auto object-cover">
        

        <!-- Kotak Tentang Kami -->
        <div class="absolute bottom-0 left-40 bg-blue-900 text-white p-6 w-full md:w-1/2 shadow-lg transform translate-y-36 h-56">
            <h2 class="text-2xl font-bold text-[#B0DED4] mb-2">Tentang Kami</h2>
            <hr class="border-t-1 border-[#B0DED4] w-1/4 mb-4">  
            <p class>
                {{$aboutus->about_us}}             
            </p>
        </div>
    </div>

    <div class="h-52 bg-white"></div>

    {{-- Visi dan Misi --}}
    <div class="relative">
        <img src="{{ asset('storage/' . $aboutus->foto_visi_misi) }}" alt="Visi Misi" class="w-full h-auto object-cover">
        

        <!-- Bagian Visi -->
        <div class="absolute top-36 left-8 text-white w-2/5 pb-72 bg-opacity-60 bg-black">
            <h2 class="mt-12 text-7xl font-bold text-center">Visi</h2>
            <p class="mt-24 space-y-4 text-lg text-center font-bold">
                {{$aboutus->visi}}
            </p>
        </div>

        <!-- Bagian Misi -->
        <div class="absolute top-36 right-8 text-white w-2/5 pb-80 bg-opacity-60 bg-black">
            <h2 class="mt-12 text-7xl font-bold text-center">Misi</h2>
            <ul class="mt-24 space-y-4 text-lg text-center font-bold">
                <li>{{$aboutus->misi}}</li>
            </ul>
        </div>
        
    </div>

    {{-- <div class="h-52 bg-white"></div> --}}

    <div class="flex justify-center items-center min-h-fit bg-blue-900 text-white p-24 w-full">
        <div class="w-14 md:w-1/2">
            <h2 class="text-center text-2xl font-bold text-[#B0DED4] mb-4">Core Value</h2>
            <ul class="list-none space-y-8 mb-11">
                <li>{{$aboutus->core_value}}</li>
                {{-- <li class="text-lg"><b>1. Integritas</b> – Menjunjung tinggi kejujuran dan tanggung jawab dalam setiap tindakan.</li>
                <li class="text-lg"><b>2. Kolaborasi</b> – Mengutamakan kerja sama dan gotong royong untuk mencapai tujuan bersama.</li>
                <li class="text-lg"><b>3. Inovasi</b> – Mendorong kreativitas dan berpikir kritis dalam menghadapi tantangan.</li>
                <li class="text-lg"><b>4. Keunggulan</b> – Berkomitmen untuk selalu memberikan yang terbaik di setiap kesempatan.</li>
                <li class="text-lg"><b>5. Empati</b> – Menghargai perbedaan dan peduli terhadap sesama.</li> --}}
            </ul>
        </div>
        
    </div>
    @endforeach

</div>