@if($announcements->isNotEmpty())
<div id="announcementCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($announcements as $announcement)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ asset('storage/'.$announcement->image_cover) }}" class="d-block w-100" alt="{{ $announcement->title }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{ $announcement->title }}</h5>
                <p>{{ $announcement->description }}</p>
                @if($announcement->button_link)
                <a href="{{ $announcement->button_link }}" class="btn btn-primary">{{ $announcement->button_text }}</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#announcementCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@else
<p>No announcements available.</p>
@endif
