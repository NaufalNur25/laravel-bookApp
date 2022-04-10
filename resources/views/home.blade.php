    @extends('layouts.main')
    @section('content')

<div class="mt-5">
    <small>Dashboard</small><h4 class="mb-3">| Naufal Nur Hafizh</h4>
    <div class="row row-cols-1 row-cols-md-5 g-4">
    @foreach ($posts as $post)
            <div class="col">
            <div class="card h-100">
                <a href="/detail/{{ $post -> slug }}"><img src="{{ asset('storage/images/'.$post -> filename) }}" class="card-img-top" alt="{{ $post -> filename }}"></a>
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

{{-- genre --}}
{{-- <div class="container mt-5">
    <small>Genre</small><h4 class="mb-3">| Choose by category</h4>
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
</div> --}}

@endsection

@section('tambah')
    <div class="tambah mt-3 d-grid" style="">
        <a href="{{ url('tools').'/add' }}" class="btn btn-primary">Add Book</a>
    </div>
    <div class="tambah mt-1 d-grid" style="">
        <a href="{{ url('tools').'/addCategory' }}" class="btn btn-warning">Add Category</a>
    </div>
@endsection




