<div>
    <h3 class="text-lg-right sm:mx-8 lg:mx-20 mt-6 text-2xl">Agenda</h3>
    <hr class="border-b-4 sm:mx-8 lg:mx-20 mb-5">
        <div class="flex max-w-full sm:mx-8 lg:mx-20 ">
          
          {{-- Berita Section --}}
          <div class="flex-2 mr-2 w-8/12">
            {{-- @foreach ( $Agenda as $items )
              
            <div class="sm:flex-none md:flex lg:flex mb-5 border-4 border-white rounded-lg overflow-hidden bg-slate-100 drop-shadow-md transform transition-transform duration-300 hover:scale-95 py-auto">
              <img src="{{ asset('storage/'. $items->image_cover)}}" alt="News Image" class="rounded-xl w-72 h-40 p-2 object-cover justify-center">

              <div class="grid grid-cols-1 mx-2 my-2">

                  <div class="flex rounded-lg h-10 w-full ontent-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 my-2 ml-2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="ml-2 items-center w-full content-center ">{{ $items->date }}</p>                    
                  </div>

                <div class="p-1 rounded-lg bg-red-800 h-24">
                  <h2>{{ $items->title }}</h2>
                  <h2 class="font-bold sm:text-xs md:text-sm lg:text-base text-justify">
                    {{ $items->description }}
                  </h2>

                  <p class="line-clamp-5 hover:line-clamp-none text-justify sm:text-xs md:text-sm lg:text-lg"></p>
                </div>
              </div>
              
            </div>
            @endforeach --}}
            @foreach ( $KalenderAgenda as $Kalender )
              
            <div class="sm:flex-none md:flex lg:flex mb-5 border-4 border-white rounded-lg overflow-hidden bg-slate-100 drop-shadow-md transform transition-transform duration-300 hover:scale-95 py-auto">
              <img src="" alt="News Image" class="rounded-xl w-72 h-40 p-2 object-cover justify-center">

              <div class="grid grid-cols-1 mx-2 my-2">

                  <div class="flex rounded-lg h-10 w-full ontent-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 my-2 ml-2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="ml-2 items-center w-full content-center ">{{ $Kalender->start_date }}</p>                    
                  </div>

                <div class="p-1 rounded-lg bg-red-800 h-24">
                  <h2>{{ $Kalender->title }}</h2>
                  <h2 class="font-bold sm:text-xs md:text-sm lg:text-base text-justify">
                    {{ $Kalender->description }}
                  </h2>

                  <p class="line-clamp-5 hover:line-clamp-none text-justify sm:text-xs md:text-sm lg:text-lg"></p>
                </div>
              </div>
              
            </div>
            @endforeach

  
  
          </div>
                
          {{-- end Berita Section --}}   


          {{-- siderbar Section kalender --}}
          <div class="flex-1 w-5/12 mb-6">

            {{-- <div class="text-center mb-5 p-5 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md">
              <img src="" alt="Kelender" class="rounded-lg w-full h-auto mb-2.5">
              <h2 class="font-bold sm:text-xs md:text-sm lg:text-lg"></h2>
              <p class="text-justify sm:text-xs md:text-sm lg:text-lg"></p>
            </div> --}}

              {{-- <div class="text-center mb-5 p-5 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md overflow-hidden w-full">
                <div class="flex justify-between items-center text-white px-8 py-2 bg-blue-900 rounded-lg">
                  <button class="prev" class="bg-transparent border-none text-white cursor-pointer text-xl">&#10094;</button>
                  <div class="flex flex-col items-center">
                    <span class="text-lg font-bold">October</span>
                    <span class="text-sm-">2024</span>
                  </div>
                  <button class="next" class="bg-transparent border-none text-white cursor-pointer text-xl">&#10095;</button>
                </div>
                <div class="p-2">
                  <div class="grid grid-cols-7 text-center font-bold text-gray-700">
                    <div class="day">Sun</div>
                    <div class="day">Mon</div>
                    <div class="day">Tue</div>
                    <div class="day">Wed</div>
                    <div class="day">Thu</div>
                    <div class="day">Fri</div>
                    <div class="day">Sat</div>
                  </div>
                  <div class="grid grid-cols-7 text-center mt-2 py-2">
                    <!-- Days of the month, you can use JS to generate these dynamically -->
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">1</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">2</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">3</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">4</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">5</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">6</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">7</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">8</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">9</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">10</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">11</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">12</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">13</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">14</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">15</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">16</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">17</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">18</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">19</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">20</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">21</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">22</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">23</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">24</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">25</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">26</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">27</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">28</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">29</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">30</div>
                    <div class="p-3 cursor-pointer rounded transition-transform hover:bg-gray-400">31</div>
                  </div>
                </div>
              </div> --}}

            <div class="text-center mb-5 p-5 border-4 border-white rounded-lg bg-slate-100 drop-shadow-md">

              {{-- <div id="calendar"></div> --}}

              <div id="calendar"></div>
              {{-- @dd($KalenderAgenda) --}}

              <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
              <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" rel="stylesheet" />

              <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      var calendarEl = document.getElementById('calendar');

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
                          ]
                      });

                      calendar.render();
                  });
              </script>


              
              {{-- Section kalender --}}
              
            {{-- <div class="mt-2">
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
            </div> --}}

          </div>
          {{-- end siderbar Section kalender --}}
        </div>

</div>