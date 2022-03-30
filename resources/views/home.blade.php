@if (session('success'))
    <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
        <div class="toast-container position-absolute p-3" id="top-0 end-0">
        <div class="toast">
            <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Storage Book</strong>
            <small>just now</small>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
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

    @extends('layouts.main')
    @section('content')

<div class="mt-5">
    <small>Dashboard</small><h4 class="mb-3">| Naufal Nur Hafizh</h4>
    <div class="row row-cols-1 row-cols-md-5 g-4">
    @foreach ($posts as $post)
            <div class="col">
            <div class="card h-100">
                <a href="/detail/{{ $post -> slug }}"><img src="" class="card-img-top" alt="None"></a>
                <div class="card-body">
                <h5 class="card-title">{{ $post -> title }}</h5>
                <p class="card-text">{{ $post -> excerpt }}</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated <b>{{ $post -> created_at }}</b></small>
                </div>
            </div>
            </div>
    @endforeach
    </div>
</div>

<div class="container mt-5">
    <small>Genre</small><h4 class="mb-3">| Choose by category</h4>
    {{-- genre --}}
    <div class="row row-cols-1 row-cols-md-5 g-4">
    @foreach ($categories as $categori)
        <div class="col zoom">
            <a href="categories/{{ $categori -> slug  }}" class="text-decoration-none">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ $categori -> name }}</div>
                    <div class="card-body">
                        <h5 class="card-title">Description:</h5>
                        <p class="card-text">Belum ada isinya..</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('tambah')
    <div class="tambah mt-3 d-grid" style="">
        <a href="/tambah" class="btn btn-primary">Tambah</a>
    </div>
@endsection




