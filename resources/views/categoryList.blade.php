@extends('layouts.main')

@section('content')

    <h1 class="text-center mt-5">Category List</h1>

    @foreach ($categories as $category)
    <a href="{{ route('categoryDetail', [$category -> slug]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center container" style="width: 35%">
         {{ $category -> name }}
          <span class="badge bg-primary rounded-pill">{{ $category -> post -> count() }}</span>
    </a>
        @endforeach

@endsection
