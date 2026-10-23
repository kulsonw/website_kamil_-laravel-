@extends('layouts.site')

@section('title', 'Subscribe')

@section('content')
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h1 class="h3">Stay Updated</h1>
                    <p class="text-muted">Subscription storage is not connected yet. You can add that when you set up the database.</p>

                    @if (session('status'))
                        <div class="alert alert-info" role="status">{{ session('status') }}</div>
                    @endif

                    <form method="POST" action="{{ route('subscribe.store') }}">
                        @csrf
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
