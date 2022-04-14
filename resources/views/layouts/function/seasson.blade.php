@if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            {{ session('success') }}
        </div>
    </div>
@endif

@if ($errors -> any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
