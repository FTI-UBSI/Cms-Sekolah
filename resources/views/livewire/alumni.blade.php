<div class="container mx-auto my-10 px-4">
    <h3 class="text-center md:text-left mx-0 md:mx-20 mt-6 text-2xl">Alumni</h3>
    <hr class="border-b-4 mx-0 md:mx-20 mb-5">

    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row">
            <!-- Filter Tahun -->
            <div class="w-full md:w-1/4">
                <div class="p-4 bg-white shadow rounded mb-6 md:mx-20">
                    <h3 class="text-xl font-bold mb-4">Tahun</h3>
                    @foreach($years as $year)
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="year{{ $year }}" 
                            wire:model="selectedYears" 
                            value="{{ $year }}" 
                            class="mr-2">
                            <label for="year{{ $year }}">{{ $year }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Grid Alumni -->
            <div class="w-full md:w-3/4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ml-0 md:ml-4 md:mx-20 mb-16">
                @if(count($filteredAlumni) > 0)
                    @foreach($filteredAlumni as $alumnus)
                        <div class="bg-white p-6 md:p-12 rounded-lg shadow text-center transform transition-transform duration-300 hover:scale-105 max-h-[400px]">
                            <img src="{{ asset('storage/' . $alumnus->photo) }}" 
                                alt="{{ $alumnus->name }}" 
                                class="w-full h-72 md:h-48 object-cover rounded-lg ">
                            <h4 class="mt-5 md:mt-14 text-lg text-center font-bold">{{ $alumnus->graduation_year }}</h4>
                            <p class="text-gray-600 text-center">{{ $alumnus->name }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="text-center col-span-full">Tidak ada alumni yang ditemukan untuk tahun yang dipilih.</p>
                @endif
            </div>
        </div>
    </div>
</div>
