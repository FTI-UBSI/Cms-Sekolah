<div>
    <h3 class="text-lg-right sm:mx-8 lg:mx-20 mt-6 text-2xl">Agenda</h3>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mb-5">
      <div class="flex max-w-full sm:mx-8 lg:mx-20 ">
          
          {{-- Berita Section --}}
          <div class="flex-2 mr-2 w-8/12">

            <div id="postData1"></div>
  
          </div>
                
          {{-- end Berita Section --}}   


          {{-- siderbar Section kalender --}}
          <div class="flex-1 w-5/12 mb-6">

            <div class="text-center p-5 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md overflow-hidden w-full">
              
              <div id="calendar1"></div>
              <!-- Tempat menampilkan data postingan -->
              <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
              <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" rel="stylesheet" />

            </div>


            <div class="text-center mb-5">
              
              {{-- Section kalender --}}
              
            <div class="mt-2">
              <h3 class="border-b-4 border-yellow-500 pl-2">Berita</h3>
                <ul>
                  @foreach ( $MediaBerita as $Berita )
                  <li class="text-justify mx-2 pt-2"><a href="#">
                    <h2 class="capitalize font-bold">{{ $Berita->title }}</h2>
                    <p class="my-2 text-sm">{{ $Berita->description }}</p>
                    <hr class="border-b-4 border-b-yellow-600 pt-1">
                  </a></li>
                    
                  @endforeach
                </ul>
            </div>

          </div>
          {{-- end siderbar Section kalender --}}
              
        </div>
      </div>
</div>

 {{-- siderbar Section kalender --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar1');
        var postData = document.getElementById('postData1');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [
                @foreach ($KalenderAgenda as $KalenderAgenda)
                {
                    title: '{{ $KalenderAgenda->title }}',
                    start: '{{ $KalenderAgenda->start_date }}',
                    end: '{{ $KalenderAgenda->end_date }}',
                },
                @endforeach
            ],
            selectable: true,
            eventDidMount: function(info) {
                // Atur ukuran font secara dinamis untuk event
                info.el.style.fontSize = '10px'; // Ubah sesuai kebutuhan
            },
            dateClick: function(info) {
                var date = info.dateStr; // Mendapatkan tanggal yang diklik (format: YYYY-MM-DD)
                fetchPosts(date); // Panggil fungsi untuk ambil data postingan
            }
        });

        calendar.render();

        // Fungsi untuk mengambil data postingan melalui AJAX
        function fetchPosts(date) {
            fetch(`/kalender1/${date}`) // Memanggil endpoint di server
                .then(response => response.json())
                .then(data => {
                    postData1.innerHTML = ''; // Kosongkan konten sebelumnya
                    if (data.length > 0) {
                        data.forEach(KalenderAgenda => {
                            postData1.innerHTML += `
                                <div class="sm:flex-none md:flex lg:flex mb-5 border-4 border-white rounded-lg overflow-hidden bg-slate-100 drop-shadow-md transform transition-transform duration-300 hover:scale-95 py-auto">
                                  <img src="storage/${KalenderAgenda.image_cover}" alt="${KalenderAgenda.title}" class="rounded-xl w-72 h-40 p-2 object-cover justify-center">
                                  <div class="grid grid-cols-1 mx-2 my-2">

                                      <div class="flex rounded-lg h-10 w-full ontent-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 my-2 ml-2">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <p class="ml-2 items-center w-full content-center ">${KalenderAgenda.start_date} - ${KalenderAgenda.end_date} </p>
                                      </div>
                                    
                                    <div class="p-1 mx-2 rounded-lg h-24">
                                      <h3>${KalenderAgenda.title}</h3>
                                      <p class="font-bold sm:text-xs md:text-sm lg:text-base text-justify">${KalenderAgenda.description}</p>

                                      <p class="line-clamp-5 hover:line-clamp-none text-justify sm:text-xs md:text-sm lg:text-lg"></p>
                                    
                                    </div>
                                  </div>
                                </div>
                            `;
                        });
                    } else {
                          modalContent.innerHTML = '<p>No posts available for this date.</p>';
                    }
                    $('#postModal').modal('show'); // Menampilkan modal
                });
        }
    });
</script>

              