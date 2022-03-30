@extends('layouts.main')

@section('content')
@foreach ($categories as $category)
    <div class="m-5">
        <h5 class="mt-0">{{ $category -> title }}</h5>
        <p>{{ $post -> excerpt }}</p>
        <a href="/detail/{{ $post -> slug }}" class="stretched-link"> Selengkapnya > </a>
        </div>
    </div>
@endforeach
@endsection