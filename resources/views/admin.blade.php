@extends('layouts.site')

@section('title', 'Admin')

@section('content')
<main class="container my-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h1 class="h3">News administration</h1>
            <p class="text-muted mb-0">
                The admin screen is ready to be connected. News management and image upload rely on a database,
                so their CRUD actions are intentionally not enabled until you add your schema and Laravel data layer.
            </p>
        </div>
    </div>
</main>
@endsection
