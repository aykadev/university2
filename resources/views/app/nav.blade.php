<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route ('') }}" class="nav-link px-2 text-warning fw-semibold">Home</a></li>
          <li><a href="{{ route ('contact.contact') }}" class="nav-link px-2 text-white">About us</a></li>
          <li><a href="{{ route ('contact.contact') }}" class="nav-link px-2 text-white">Universities</a></li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-warning"><a href="{{ route ('contact.contact') }}">Contact us</a></button>
        </div>
      </div>
    </div>
  </header>