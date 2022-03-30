@extends('layouts.form')

@section('inputForm')
<form class="row g-3" action="{{ url('tambah/execute') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" id="inputEmail4" name="title">
    </div>

    <div class="col-md-3">
    <label class="form-label">Slug</label>
    <input type="text" class="form-control" name="slug">
    </div>

    <div class="col-md-3">
    <label class="form-label">Pengarang Buku</label>
    <input type="text" class="form-control" id="inputPassword4" name="author">
    </div>

    <div class="col-12">
    <label class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="inputAddress" name="publisher">
    </div>

    <div class="col-12">
    <label class="form-label">Tanggal Terbit</label>
    <input type="date" class="form-control" id="inputAddress2" name="publish_at">
    </div>

    <div class="col-12">
    <label class="form-label">Synopsis</label>
    <input type="text" class="form-control" id="inputAddress2" name="excerpt">
    </div>

    <div class="col-12">
    <label class="form-label">Cover</label>
    <input type="file" class="form-control" id="inputAddress2" name="filename">
    </div>

    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="category_id[]" value="1">
        <label class="btn btn-outline-primary" for="btncheck1">Action</label>

        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="category_id[]" value="2">
        <label class="btn btn-outline-primary" for="btncheck2">Fantasy</label>

        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="category_id[]" value="3">
        <label class="btn btn-outline-primary" for="btncheck3">Romance</label>

        <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="category_id[]" value="4">
        <label class="btn btn-outline-primary" for="btncheck4">Horror</label>

        <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off" name="category_id[]" value="5">
        <label class="btn btn-outline-primary" for="btncheck5">Science Fiction</label>

        <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off" name="category_id[]" value="6">
        <label class="btn btn-outline-primary" for="btncheck6">Slice of Life</label>

        <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off" name="category_id[]" value="7">
        <label class="btn btn-outline-primary" for="btncheck7">Drama</label>

        <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off" name="category_id[]" value="8">
        <label class="btn btn-outline-primary" for="btncheck8">Comedy</label>

        <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off" name="category_id[]" value="9">
        <label class="btn btn-outline-primary" for="btncheck9">Kingdom</label>

        <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off" name="category_id[]" value="10">
        <label class="btn btn-outline-primary" for="btncheck10">Thriller</label>

        <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off" name="category_id[]" value="11">
        <label class="btn btn-outline-primary" for="btncheck11">Sport</label>

        <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off" name="category_id[]" value="12">
        <label class="btn btn-outline-primary" for="btncheck12">Isekai</label>
    </div>

    <div class="col-12">
    <div class="form-floating">
    <textarea name="body" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Isi Buku</label>
    </div>


    <div class="col-12 mb-8 mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
