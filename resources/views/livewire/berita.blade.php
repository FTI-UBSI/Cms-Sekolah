<div>
    {{-- @dd($berita) --}}
    <section class="relative bg-white dark:bg-gray-900 p-16">
        <div class="grid grid-cols-12 gap-10">
            @foreach ($berita as $item)

                <img src="{{ asset('storage/'.$item->image) }}" alt="" class="col-span-5 w-full rounded-2xl">

            <div class="col-span-7 py-4">
                <div>{{ $item->publish_date }}</div>
                <p class="font-bold text-lg my-4">
                   {{ $item->title }}
                </p>
                <p class="mb-5">
                    {!! $item->description !!}
                </p>
                <a href="/berita/{{ $item->id }}" class="">
                    <button class="bg-blue-500 text-xs py-1 px-4 font-semibold text-white rounded-lg">Selengkapnya -></button>
                </a>
            </div>
            @endforeach

        </div>
    </section>
</div>
