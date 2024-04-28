<div class="fw-semibold bg-white border rounded p-3">
    <div class="row g-2">
        <div class="col-12 fs-4">
            {{ $obj->name }}
        </div>
        <div class="col-3 text-truncate">
            <span class="text-secondary">Program:</span>
            <span class="{{ isset($f_brand) ? 'mark':'' }}">
                {{ $obj->program->name }}
            </span>
        </div>
        <div class="col-3 text-truncate">
            <span class="text-secondary">Location:</span>
            <span class="{{ isset($f_location) ? 'mark':'' }}">
                {{ $obj->location->name }}
            </span>
        </div>
        <div class="col-3">
            <span class="text-secondary">Program Requirement:</span>
            <span class="{{ isset($f_programRequirement) ? 'mark':'' }}">
                {{ $obj->programRequirement->name }}
            </span>
        </div>
    </div>
</div>
