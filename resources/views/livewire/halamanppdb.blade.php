<div class="container">
    <h2 class="text-3xl mb-6 mt-6 text-center text-blue-900 font-serif font-extrabold">INFORMASI PPDB</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ml-20 mb-6">
        @foreach($ppdbs as $ppdb)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white card shadow-md rounded-lg overflow-hidden border border-gray-200" style="box-shadow: 0px 4px 6px rgba(137, 137, 181, 0.5);">
                    
                    <!-- Card Image (Aspect Ratio like TV, 16:9) -->
                    <img src="{{ asset('storage/' . $ppdb->image_cover) }}" class="mx-auto mt-4 tv-screen" alt="{{ $ppdb->title }}" style="height: 200px; width: auto;">

                    <style>
                        .tv-screen {
                            border: 2px solid rgb(229 231 235) ; /* Warna border hitam */
                            border-radius: 3px; /* Membuat sudut border sedikit melengkung */
                            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5); /* Bayangan lembut untuk efek kedalaman */
                        }
                    </style>

                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column justfy-start mt-6 ml-2">
                        <!-- Title -->
                        <h5 class="text-2x1 font-sans card-title text-lg font-bold mb-1">{{ $ppdb->title }}</h5>
                        
                        <!-- Description -->
                        <p class="card-text font-sans ">{{ $ppdb->description }}</p>

                        <!-- Action Button (aligned at the bottom) -->
                        <a href="{{ $ppdb->button_link }}" class="mt-6 inline-block">
                            <button class="bg-blue-950 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full transition duration-100">
                                {{ $ppdb->button_text }}
                            </button>
                        </a>
                    </div>
                    <hr class="border-t border-gray-300 mt-4">
                    <!-- Card Footer (Date of upload) -->
                    <div class="card-footer text-gray-400 mt-2 mb-2 ml-2 text-muted  ">
                        {{ date('d M Y', strtotime($ppdb->created_at)) }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container shadow-md rounded-lg mx-auto p-4 bg-white  ml-9 mb-5 ">
        @foreach($info as $item)
            <h2 class="text-center text-xl font-bold text-indigo-700 mb-4">Informasi Pengisian Data Peserta Didik Baru</h2>
            <div class="bg-white p-6 border border-gray-300 rounded-md">
                <ul class=" ml-6 text-left text-gray-800 space-y-2">
                    <!-- Menggunakan white-space: pre-line untuk menjaga newline pada deskripsi -->
                    <li style="white-space: pre-line;">{{ $item->description }}</li>
                </ul>
                <div class="flex justify-center mt-6">
                    <a href="{{ $item->button_link }}" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition">
                        {{ $item->button_text }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    
    
</div>
