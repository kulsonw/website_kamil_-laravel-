@extends('layouts.site')

@section('title', $newsPost ? 'Edit news article' : 'Create news article')

@section('content')
<main class="container my-5" style="max-width: 900px;">
    <div class="mb-4">
        <a href="{{ route('admin.news') }}" class="text-decoration-none">&larr; Back to news</a>
        <h1 class="h3 mt-3">{{ $newsPost ? 'Edit news article' : 'Create news article' }}</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <p class="fw-semibold mb-1">Please correct the following:</p>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="card border-0 shadow-sm" method="POST" action="{{ $newsPost ? route('admin.news.update', $newsPost) : route('admin.news.store') }}">
        @csrf
        @if ($newsPost)
            @method('PUT')
        @endif
        <div class="card-body p-4">
            <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" id="title" name="title" maxlength="255" value="{{ old('title', $newsPost->title ?? '') }}" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="category">Category</label>
                    <input class="form-control" id="category" name="category" maxlength="80" value="{{ old('category', $newsPost->category ?? '') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="published_at">Publish date</label>
                    <input class="form-control" id="published_at" name="published_at" type="date" value="{{ old('published_at', $newsPost ? $newsPost->published_at->format('Y-m-d') : now()->toDateString()) }}" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="excerpt">Excerpt</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3" maxlength="2000" required>{{ old('excerpt', $newsPost->excerpt ?? '') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="body">Article body <span class="text-muted">(optional)</span></label>
                <textarea class="form-control" id="body" name="body" rows="8">{{ old('body', $newsPost->body ?? '') }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="image_path">Image filename or URL <span class="text-muted">(optional)</span></label>
                    <input class="form-control" id="image_path" name="image_path" maxlength="255" value="{{ old('image_path', $newsPost->image_path ?? '') }}">
                    <div class="form-text">Use an image from the site's images folder or provide an HTTP(S) image URL.</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="source">Source <span class="text-muted">(optional)</span></label>
                    <input class="form-control" id="source" name="source" maxlength="120" value="{{ old('source', $newsPost->source ?? '') }}">
                </div>
            </div>
            <div class="d-flex flex-wrap gap-4 mb-4">
                <div class="form-check">
                    <input class="form-check-input" id="is_published" name="is_published" type="checkbox" value="1" @checked(old('is_published', $newsPost->is_published ?? true))>
                    <label class="form-check-label" for="is_published">Published</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="is_featured" name="is_featured" type="checkbox" value="1" @checked(old('is_featured', $newsPost->is_featured ?? false))>
                    <label class="form-check-label" for="is_featured">Feature this article</label>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">{{ $newsPost ? 'Save changes' : 'Create article' }}</button>
            <a class="btn btn-outline-secondary" href="{{ route('admin.news') }}">Cancel</a>
        </div>
    </form>
</main>
@endsection
