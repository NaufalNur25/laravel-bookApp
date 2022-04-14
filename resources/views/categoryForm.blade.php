@extends('layouts.form')

@section('inputForm')
<form class="row g-3" action="{{ route('addCategory') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
    <label class="form-label">Genre</label>
    <input type="text" class="form-control" id="title" name="name" value="{{ @$post -> title }}">
    </div>

    <div class="col-md-6">
    <label class="form-label">Slug Genre</label>
    <input type="text" class="form-control" id="slug" name="slug" value="{{ @$post -> slug }}" readonly>
    </div>

    <div class="col-12">
    <div class="form-floating">
    <textarea name="excerpt" class="form-control" id="floatingTextarea2" style="height: 100px">{{ @$post -> excerpt }}</textarea>
    <label for="floatingTextarea2">Desciption Genre</label>
    </div>

    <div class="d-grid gap-2 mb-1 mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
