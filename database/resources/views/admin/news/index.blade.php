@extends('layouts.site')

@section('title', 'News administration')

@section('content')
<main class="container my-5">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">News administration</h1>
            <p class="text-muted mb-0">Create, edit, publish, and remove news articles.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('admin.news.create') }}">Create article</a>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="status">{{ session('status') }}</div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th scope="col">Article</th>
                        <th scope="col">Category</th>
                        <th scope="col">Publish date</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($newsItems as $newsPost)
                        <tr>
                            <td>
                                <span class="fw-semibold">{{ $newsPost->title }}</span>
                                @if ($newsPost->is_featured)
                                    <span class="badge text-bg-info ms-1">Featured</span>
                                @endif
                            </td>
                            <td>{{ $newsPost->category }}</td>
                            <td>{{ $newsPost->published_at->format('M j, Y') }}</td>
                            <td>
                                @if ($newsPost->is_published && $newsPost->published_at->isPast())
                                    <span class="badge text-bg-success">Published</span>
                                @elseif ($newsPost->is_published)
                                    <span class="badge text-bg-warning">Scheduled</span>
                                @else
                                    <span class="badge text-bg-secondary">Draft</span>
                                @endif
                            </td>
                            <td class="text-end text-nowrap">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.news.edit', $newsPost) }}">Edit</a>
                                <form class="d-inline" method="POST" action="{{ route('admin.news.destroy', $newsPost) }}" onsubmit="return confirm('Delete this article?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-muted py-5" colspan="5">No news articles yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">{{ $newsItems->links() }}</div>
</main>
@endsection
