@extends('layouts.site')

@section('title', 'News')

@section('content')
<main class="container my-4" id="latest-news">
    <h1 class="mb-1">Latest Updates</h1>
    <p class="text-muted mb-4">Stay in the loop with what's happening</p>

    <div class="row g-3 mb-5">
        <div class="col-md-4"><div class="card border-0 border-info shadow-sm text-center p-4"><span class="num">12+</span><span class="lbl">Projects Done</span></div></div>
        <div class="col-md-4"><div class="card border-0 shadow-sm text-center p-4"><span class="num">5+</span><span class="lbl">Years Experience</span></div></div>
        <div class="col-md-4"><div class="card border-0 shadow-sm text-center p-4"><span class="num">50+</span><span class="lbl">Happy Clients</span></div></div>
    </div>

    @if ($newsItems->isEmpty())
        <div class="alert alert-info mb-5">No news articles have been published yet.</div>
    @else
        @php($featuredPost = $newsItems->first())
        <article class="card border-0 border-primary text-bg-success shadow-sm overflow-hidden mb-5">
            <div class="row g-0">
                <div class="{{ $featuredPost->image_url ? 'col-lg-8' : 'col-12' }} p-4">
                    <div class="card-body">
                        <span class="tag mb-2">{{ $featuredPost->category }}</span>
                        <h2 class="card-title mt-2">{{ $featuredPost->title }}</h2>
                        <p class="card-text">{{ $featuredPost->excerpt }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">{{ $featuredPost->published_at->format('M j, Y') }}{{ $featuredPost->source ? ' | '.$featuredPost->source : '' }}</small>
                            <a href="#more-news" class="btn btn-outline-warning btn-sm">More News &rarr;</a>
                        </div>
                    </div>
                </div>
                @if ($featuredPost->image_url)
                    <div class="col-lg-4 d-none d-lg-flex align-items-stretch">
                        <img src="{{ $featuredPost->image_url }}" alt="{{ $featuredPost->title }}" class="news-featured-image">
                    </div>
                @endif
            </div>
        </article>

    <div class="row g-4" id="more-news">
        <section class="col-lg-8">
            <h3 class="mb-3">More News</h3>
            <div class="row g-4">
                @foreach ($newsItems->skip(1) as $item)
                    <div class="col-md-6">
                        <article class="card border-0 shadow-sm h-100">
                            @if ($item->image_url)
                                <img src="{{ $item->image_url }}" class="card-img-top" alt="{{ $item->title }}">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="tag">{{ $item->category }}</span>
                                    <span class="text-muted small">{{ $item->published_at->format('M j, Y') }}</span>
                                </div>
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text text-muted small flex-grow-1">{{ $item->excerpt }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </section>

        <aside class="col-lg-4">
            <h5 class="mb-3">Other News</h5>
            <div class="list-group">
                @forelse ($newsItems->skip(1)->take(3) as $item)
                    <div class="list-group-item">
                        <h6 class="mb-1">{{ $item->title }}</h6>
                        <p class="mb-1 text-muted small">{{ $item->excerpt }}</p>
                    </div>
                @empty
                    <div class="list-group-item text-muted">No other articles yet.</div>
                @endforelse
            </div>

            <div class="card text-bg-danger mt-4 border-0 shadow-sm">
                <img src="{{ asset('images/mpk.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h6 class="card-title">Stay Updated</h6>
                    <p class="card-text small mb-2">Get the latest news by email.</p>
                    <a href="{{ route('subscribe') }}" class="btn btn-primary btn-sm">Subscribe</a>
                </div>
            </div>
        </aside>
    </div>
    @endif
</main>
@endsection
