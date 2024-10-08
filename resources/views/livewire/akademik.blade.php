<div>
    <h3 class="text-lg-right sm:mx-8 lg:mx-20 mt-6 text-2xl">Kalender Akademik</h3>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mb-5">
    <div class="flex max-w-full sm:mx-8 lg:mx-20">

        {{-- kalender --}}
        <div class="flex-2 mr-2 w-8/12 mb-6">
            
            <div class="text-center p-5 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md overflow-hidden w-full">
                
                <div id="calendar2"></div>
                
                
                <!-- Tempat menampilkan data postingan -->
                
                <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
                <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" rel="stylesheet" />
                
            </div>
            
        </div>
        {{-- kalender --}}
        
        {{-- keterangan --}}
        <div class="flex-1 w-5/12 mb-6">
            
            <div class="text-center p-5 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md overflow-hidden w-full">
                <p class="text-lg font-bold uppercase">Kegiatan</p>
                <hr class="border-b-4 sm:mx-5 lg:mx-8 mb-5 border-yellow-600 ">
                <div id="postData2"></div>

            </div>

        </div>
        {{-- keterangan --}}
    

    </div>
</div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar2');
                var postData = document.getElementById('postData2');

                console.log(postData);

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: [
                        @foreach ($KalenderAkademik as $KalenderAkademik)
                        {
                            title: '{{ $KalenderAkademik->title }}',
                            start: '{{ $KalenderAkademik->start_date }}',
                            end: '{{ $KalenderAkademik->end_date }}',
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
                    fetch(`/kalender2/${date}`) // Memanggil endpoint di server
                        .then(response => response.json())
                        .then(date => {
                            postData.innerHTML = ''; // Kosongkan konten sebelumnya
                            if (date.length > 0) {
                                console.log(date);
                                date.forEach(KalenderAkademik  => {
                                    postData.innerHTML += `
                                        <div class="gap-1 border-4 bg-blue-600 sm:mx-5 lg:mx-8 rounded-lg">
                                            <h3 class="font-bold sm:text-xs md:text-sm lg:text-base text-white mt-2">${KalenderAkademik.title}</h3>
                                            <p class="sm:text-xs md:text-sm lg:text-base text-white mb-2">${KalenderAkademik.description}</p>
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
