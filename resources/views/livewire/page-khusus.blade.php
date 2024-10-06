<div class="max-w-6xl mx-auto py-10">
    <h1 class="text-center text-3xl font-semibold text-gray-700 mb-8" data-aos="fade-up">Program Khusus</h1>
    <!-- Grid container untuk card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($prosus as $item)
        <!-- Card dengan AOS animation -->
        <div class="bg-white shadow-md rounded-lg p-6" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('storage/' . $item->image_cover) }}" alt="Design Grafis" class="w-full h-40 object-cover mb-4 rounded">
            <h2 class="text-xl font-bold text-center text-indigo-600 mb-2">{{ $item->title }}</h2>
            <p class="text-center whitespace-pre-wrap text-gray-700 mb-6">{{ $item->description }}</p>
        </div>
        @endforeach
    </div>
</div>
