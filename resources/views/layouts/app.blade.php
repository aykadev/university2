<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class='bg-gray-100'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Navbar">
        <div class="container-xl">
            <a class="navbar-brand" href="#">WorldUniversities</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


    <div>
    <form action="{{ url()->current() }}" method="get">
        <div class="mb-3">
            <label for="location" class="form-label fw-semibold">Location</label>
            <select class="form-select" id="location" name="location">
                <option value>-</option>
                
            </select>
        </div>

        <div class="mb-3">
            <label for="program" class="form-label fw-semibold">Program</label>
            <select class="form-select" id="program" name="program">
                <option value>-</option>
                
            </select>
        </div>

        <div class="mb-3">
            <label for="programRequirement" class="form-label fw-semibold">Program Requirements</label>
            <select class="form-select" id="programRequirement" name="programRequirement">
                <option value>-</option>
                
            </select>
        </div>

        <div class="row g-2">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
            <div class="col">
                <a href="{{ url()->current() }}" class="btn btn-secondary w-100">Clear</a>
            </div>
        </div>
    </form>
</div>

iv class="container py-4">
        <div class="mb-5">
            <div class="h4 text-primary mb-3">
                LOCATIONS
            </div>
            <div class="row g-3">
                @foreach($locations as $location)
                    <div class="col">
                        <div class="border rounded p-2">
                            <div class="h6 mb-0">
                                <a href="{{ route('cars.index', ['location' => $location->id]) }}"
                                   class="link-dark text-decoration-none">
                                    {{ $location->name }}
                                </a>
                                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">
                                    {{ $location->cars_count }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <div class="h4 text-primary mb-3">
                BRANDS
            </div>
            <div class="row g-3">
                @foreach($brands as $brand)
                    <div class="col">
                        <div class="border rounded p-2">
                            <div class="h6">
                                <a href="{{ route('cars.index', ['brand' => $brand->id]) }}"
                                   class="link-dark text-decoration-none">
                                    {{ $brand->name }}
                                </a>
                                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">
                                    {{ $brand->cars_count }}
                                </span>
                            </div>
                            <div>
                                @foreach($brand->brandModels as $brandModel)
                                    <div>
                                        <a href="{{ route('cars.index', ['brandModel' => $brandModel->id]) }}"
                                           class="link-dark text-decoration-none">
                                            {{ $brandModel->name }}
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

</body>
</html>
