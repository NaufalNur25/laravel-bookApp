    @extends('layouts.main')

    @section('content')

<div class="mt-5">
    <small>Recommendation</small><h4 class="mb-3">| Naufal Nur Hafizh</h4>
    <div class="row row-cols-1 row-cols-md-5 g-4">
    @foreach ($posts as $post)
            <div class="col">
            <div class="card h-100">
                <a href="{{ route('showBook', [$post -> slug]) }}"><img src="{{ asset('storage/images/'.$post -> filename) }}" class="card-img-top" alt="{{ $post -> filename }}"></a>
                    <div class="card-body">
                    <h5 class="card-title">{{ $post -> title }}</h5>
                    <p class="card-text">{{ $post -> excerpt }}</p>
                    </div>
            </div>
            </div>
    @endforeach
    </div>
</div>

<div class="mt-5">
    <small>All of post</small><h4 class="mb-3">| Latest Updated</h4>
    <div class="row row-cols-1 row-cols-md-6 g-1">
    @foreach ($recoms as $post)
            <div class="col">
            <div class="card h-100">
                <a href="{{ route('showBook', [$post -> slug]) }}"><img src="{{ asset('storage/images/'.$post -> filename) }}" class="card-img-top" alt="{{ $post -> filename }}"></a>
                    <div class="card-body">
                    <h5 class="card-title">{{ $post -> title }}</h5>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted"><b>{{ $post -> updated_at -> diffForHumans() }}</b> <span class="{{  ($post -> updated_at -> diffForHumans()) >= ($post -> updated_at -> addHours(1))
                        ? '' : 'badge bg-primary' }}">
                    {{
                        ($post -> updated_at -> diffForHumans()) >= ($post -> updated_at -> addHours(1))
                        ? '' : 'New'
                    }}</span></small>
                    </div>
            </div>
            </div>
    @endforeach
    </div>
</div>

{{-- genre --}}
<div class="container mt-5">
    <small>Genre</small><h4 class="mb-3">| Choose by category</h4>
    <div class="row row-cols-1 row-cols-md-5 g-4">
    @foreach ($categories as $categori)
        <div class="col zoom">
            <a href="{{ route('categoryDetail', [$categori -> slug]) }}" class="text-decoration-none">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; min-height: 12rem">
                    <div class="card-header">{{ $categori -> name }}</div>
                    <div class="card-body">
                        <h5 class="card-title">Description:</h5>
                        <p class="card-text">{{ $categori -> excerpt }}</p>
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
        <a href="{{ url('tools').'/add' }}" class="btn btn-primary">Add Book</a>
    </div>
    <div class="tambah mt-1 d-grid" style="">
        <a href="{{ url('tools').'/addCategory' }}" class="btn btn-warning">Add Category</a>
    </div>
@endsection
