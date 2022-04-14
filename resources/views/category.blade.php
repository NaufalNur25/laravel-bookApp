@extends('layouts.main')

@section('content')
    <div class="m-5">
        <h5 class="mt-0">{{ $category -> name }}</h5>
        <p>{{ $category -> excerpt }}</p>
        </div>
    </div>
@endsection
