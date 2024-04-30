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
                        
                        <span class="ms-2">No university found.</span>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection

