<div >
    <div class="text-center text-4xl font-bold mb-10">VIDEO</div>
    <div class="grid grid-cols-2 gap-x-5 gap-y-10 mb-10">
        {{-- @dd($video) --}}
        @foreach ($video as $item)
        {{-- <div class="bottom-0 w-full h-60 bg-gradient-to-t from-gray-500 to-transparent rounded-xl">
            {{ $item->youtube_video_id }}
        </div> --}}
        {{-- <img src="https://img.youtube.com/vi/{{ $item->youtube_video_id }}/maxresdefault.jpg" alt="YouTube Thumbnail"> --}}
        {{-- <img src="https://img.youtube.com/vi/{{ $item->youtube_video_id }}/hqdefault.jpg   " alt="" srcset=""> --}}


        {{-- <video src="url('{{ $item->youtube_video_id }}')"></video> --}}

        <iframe src="https://www.youtube.com/embed/{{ $item->url }}" frameborder="0" class="w-full h-80" allowfullscreen></iframe>
        @endforeach
    </div>
    <div class="w-48 m-auto">
        {{ $video->links() }}
    </div>
</div>