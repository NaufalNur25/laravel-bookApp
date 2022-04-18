@extends('layouts.main')

@section('content')
    <div class="mt-5 mb-5 ms-5">
        <h5 class="mt-0">{{ $category -> name }}</h5>
        <p>{{ $category -> excerpt }}</p>
        </div>
    </div>

    <div class="container-fluid" style="width: 88%">
        <div class="row row-cols-1 row-cols-md-6 g-1">
        @foreach ($posts as $post)
                <div class="col">
                <div class="card h-100">
                    <a href="{{ route('showBook', [$post -> slug]) }}"><img src="{{ asset('storage/images/'.$post -> filename) }}" class="card-img-top" alt="{{ $post -> filename }}"></a>
                        <div class="card-body">
                        <h5 class="card-title">{{ $post -> title }}</h5>
                        </div>
                </div>
                </div>
        @endforeach
        </div>
    </div>
@endsection
