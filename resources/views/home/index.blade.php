@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="container py-4">
        <div class="mb-5">
            <div class="h4 text-primary mb-3">
                LOCATIONS
            </div>
            <div class="row g-3">
                @foreach($locations as $location)
                    <div class="col">
                        <div class="border rounded p-2">
                            <div class="h6 mb-0">
                                <a href="{{ route('universities.index', ['location' => $location->id]) }}"
                                   class="link-dark text-decoration-none">
                                    {{ $location->name }}
                                </a>
                                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">
                                    {{ $location->universities_count }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <div class="h4 text-primary mb-3">
                Programs
            </div>
            <div class="row g-3">
                @foreach($programs as $program)
                    <div class="col">
                        <div class="border rounded p-2">
                            <div class="h6">
                                <a href="{{ route('cars.index', ['brand' => $brand->id]) }}"
                                   class="link-dark text-decoration-none">
                                    {{ $program->name }}
                                </a>
                                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">
                                    {{ $program->universities_count }}
                                </span>
                            </div>
                            <div>
                                @foreach($program->programRequirements as $programRequirement)
                                    <div>
                                        <a href="{{ route('universities.index', ['programRequirement' => $programRequirement->id]) }}"
                                           class="link-dark text-decoration-none">
                                            {{ $programRequirement->name }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
