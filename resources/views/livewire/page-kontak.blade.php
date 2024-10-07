<div class="container mx-auto">
    <h3 class="text-lg-right font-bold text-blue-900  mx-20 mt-6 mb-2 text-2xl">KONTAK KAMI</h3>
    <hr class="border-gray-300 ml-16 mb-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white p-6 mt-6 mb-6 shadow-md">
        <!-- Left Section (Contact Info) -->
        <div>
            <div class="ml-5 space-y-4">
                @foreach ($sosmed as $item)
                <h2 class="text-lg font-semibold mb-4">Hubungi Kami</h2>
                <p><strong>{{ $item->tittle }}</strong></p>

                <p class="flex items-center space-x-2">
                    <img  src="https://img.icons8.com/color/24/email.png" alt="Email Icon"/>
                    <a href="mailto:smkubsi@gmail.com" class="text-blue-600">{{ $item->E_Mail }}</a>
                </p>
                
                <p class="flex items-center space-x-2">
                    <img class="mr-2" src="https://img.icons8.com/color/24/phone.png" alt="Phone Icon"/>{{ $item->No_HP }}
                </p>
                
                <p class="flex items-center space-x-2">
                    <img class="mr-2" src="https://img.icons8.com/color/24/clock.png" alt="Clock Icon"/>
                    {{ $item->Jam_Operasional }}
                </p>
                
                <p class="flex items-center space-x-2">
                    <img src="https://img.icons8.com/color/24/marker.png" alt="Location Icon"/>
                    <span>
                        {{ $item->Alamat }}
                    </span>
                </p>
                

                <!-- Social Media Icons -->
                <div class="flex space-x-4">
                    <a href="{{ $item->Fb_link }}" class="text-blue-600 transform transition-transform duration-300 hover:scale-150">
                        <img src="https://img.icons8.com/color/48/facebook.png" alt="Facebook Icon"/>
                    </a>
                    <a href="{{ $item->ytb_link }}" class="text-red-600 transform transition-transform duration-300 hover:scale-150">
                        <img src="https://img.icons8.com/color/48/youtube-play.png" alt="YouTube Icon"/>
                    </a>
                    <a href="{{ $item->ig_link }}" class="text-cyan-500 transform transition-transform duration-300 hover:scale-150">
                        <img src="https://img.icons8.com/color/48/instagram-new.png" alt="Instagram Icon"/>
                    </a>
                    <a href="{{ $item->Wa_link }}" class="text-green-500 transform transition-transform duration-300 hover:scale-150">
                        <img src="https://img.icons8.com/color/48/whatsapp.png" alt="WhatsApp Icon"/>
                    </a>
                    
                    
                </div>
                @endforeach
            </div>
        </div>

        <!-- Right Section (Form) -->
        <div>
            <h2 class="text-lg font-semibold mb-4">Pertanyaan dan Saran</h2>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Nama" class="border p-2 w-full" required>
                    <input type="number" name="phone" placeholder="No Wa" class="border p-2 w-full" required>
                    <input type="email" name="email" placeholder="E-Mail" class="border p-2 w-full" required>
                </div>
                <div>
                    <select name="jenis_informasi" class="border p-2 w-full" required>
                        <option value="">Jenis Informasi</option>
                        <option value="Pertanyaan">Pertanyaan</option>
                        <option value="Saran">Saran</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="subject" placeholder="Subject" class="border p-2 w-full" required>
                </div>
                <div>
                    <textarea name="message" placeholder="Pesan Anda" class="border p-2 w-full h-32" required></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-orange-500 duration-100 transform transition-transform hover:scale-105">KIRIM</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Maps -->
    <div class="flex justify-center items-center min-h-[80vh] bg-gray-100">
        <div class="bg-white border border-gray-300 rounded-lg shadow-lg w-full max-w-3xl mb-6 p-5 mx-auto">
            @foreach ($peta as $item)
            <!-- Pastikan text-center dan text-blue-900 muncul dengan baik -->
            <h2 class="text-center text-blue-900 font-semibold text-2xl mb-4">{{ $item->title }}</h2>
    
            <!-- Google Maps -->
            <div class="w-full h-64 mb-4">
                <a href="{{ $item->button_link }}" target="">
                    <img src="{{ asset('storage/' . $item->image_cover) }}" 
                         alt="Lokasi Kami" 
                         class="max-w-md w-full h-auto object-cover rounded-lg mx-auto transform transition-transform duration-300 hover:scale-105">
                </a>
                <p class="text-gray-700 mb-4 mt-2 text-center">{{ $item->description }}</p>
            </div>
    
            <!-- Tombol -->
            <div class="flex mt-4 justify-center">
                <a href="{{ $item->button_link }}" target="_blank" class="bg-blue-900 text-white px-6 py-2 rounded-md font-semibold mt-10 hover:bg-orange-500 transition duration-200">
                    {{ $item->button_text }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
    
    
    
    
</div>
