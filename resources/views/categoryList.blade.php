@extends('layouts.main')

@section('content')

<h1 class="text-center mt-5">Category List</h1>

<div class="mt-3 mb-3 container" style="width: 50%">
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-primary text-black">
          A list item
          <span class="badge bg-light text-dark rounded-pill">14 Item</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-primary text-black">
          A second list item
          <span class="badge bg-light text-dark rounded-pill">2 Item</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-primary text-black">
          A third list item
          <span class="badge bg-light text-dark rounded-pill">1 Item</span>
        </li>
    </ul>
</div>
@endsection
