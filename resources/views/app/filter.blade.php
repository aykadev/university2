<div>
    <form action="{{ url()->current() }}" method="get">

        <div class="mb-3">
            <label for="q" class="form-label fw-semibold">Search</label>
            <input type="search" class="form-control" id="q" name="q" placeholder="2012 Toyota" value="{{ $f_q ?: '' }}" autofocus>
        </div>
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
            <label for="programRequirement" class="form-label fw-semibold">Brand Model</label>
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
