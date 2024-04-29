@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center mb-4 h1 text-primary">Universities</h2>
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-4 text-black">
            @forelse($universities as $university)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <a href="{{ route('universities.show', ['university' => $university->id]) }}" class="stretched-link text-decoration-none">
                                <h5 class="card-title">{{ $university->name }}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" viewBox="0 0 24 24"><path d="M10.9 14.3l4.6-4.6a1 1 0 0 0-1.4-1.4l-4.6 4.6a1 1 0 0 0 0 1.4zM14.3 10.9l4.6-4.6a1 1 0 1 0-1.4-1.4l-4.6 4.6a1 1 0 0 0 0 1.4zM10.9 7.5l4.6-4.6a1 1 0 0 0-1.4-1.4l-4.6 4.6a1 1 0 0 0 0 1.4z"></svg>
                        <span class="ms-2">No university found.</span>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection

