@extends('layouts.app')

@section('title')
    WorldUniversities
@endsection

@section('content')
    <div class="container py-4">
        <div class="mb-5">
            <h2 class=" text-center mb-4 h1 ">Countries</h2>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-4">
               @foreach($locations as $location)
                    <div class="col">
                        <div class="card shadow-sm h-100 border-0 rounded overflow-hidden">
                            <a href="{{route('universities.index', ['location'=> $location->id])}}" class="stretched-link text-decoration-none">
                                <div class="card-body d-flex flex-column justify-content-between pb-3">
                                    <h5 class="card-title text-dark mb-2">{{$location->name}}</h5>
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted me-2"><i class="fas fa-hotel text-warning"></i></span>
                                        <span class="text-muted">{{$location->universities_count}} Universities</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


