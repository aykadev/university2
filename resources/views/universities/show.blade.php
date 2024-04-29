@extends('layouts.app')
@section('title')
    {{ $university->name }} University
@endsection
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-sm">
                <div class="card-body">
                    <h2 class="card-title">{{ $university->name }}</h2>
                    <br>
                    <div class="d-flex align-items-center">
                        <span class="fw-bold me-2">Program:</span>
                        {{ $university->program_id }}
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="fw-bold me-2">Program Requirement:</span>
                        {{ $university->program_requirement_id }}
                    </div>
                </div>
                <p class="card-text"><span class="fw-bold">Comment:</span> {{ $university->comment }}</p>
            </div>
        </div>
    </div>
@endsection
