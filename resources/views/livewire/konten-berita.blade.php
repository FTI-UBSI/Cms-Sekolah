<div>
    {{-- @dd($berita) --}}
    <header class="relative">
        <section
        style="background-image: url('{{ asset('storage/' . $berita->image) }}');"
            class="bg-cover bg-bottom bg-no-repeat bg-gray-700 bg-blend-multiply h-screen">

            <div class="absolute inset-x-0 bottom-0 left-32 right-0 px-4 mx-auto max-w-screen-xl text-left py-24 lg:py-52">
            
            </div>
        </section>
    </header>
    <section class="relative bg-white dark:bg-gray-900 p-16">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-9">
                <div class="mb-2">
                    {{ $berita->publish_date }}
                </div>
                <h1 class="text-center mb-5 font-bold text-xl px-16">
                   {{$berita->title}}
                </h1>
                <div class="text-justify leading-tight">
                    {!! $berita->description !!}
                </div>
            </div>
            <div class="col-span-3">
                <div class="mb-5 font-bold">Berita Lainnya</div>
                @foreach ($other as $item)
                <a href="/berita/{{ $item->id }}" class="block w-full mb-4 rounded-xl overflow-hidden">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="overflow-hidden col-span-5 w-full rounded-xl">
                            <img src="{{ asset('storage/'.$item->image) }}" alt="" class=" rounded-xl w-full">
                        </div>
                        <div class="col-span-7 ">
                            <p class="font-bold text-base">
                                {{ $item->title }}
                            </p>
                            <p class="text-xs mt-2">
                                {!! $item->description !!}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach


                </div>

            </div>
        </div>
    </section>
</div>
