@extends('layouts.form')

@section('inputForm')
<form class="row g-3" action="{{ @$post ? url('edit/execute',$post -> id ) : url('add/execute') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" id="inputEmail4" name="title" value="{{ @$post -> title }}">
    </div>

    <div class="col-md-3">
    <label class="form-label">Slug</label>
    <input type="text" class="form-control" name="slug" value="{{ @$post -> slug }}" >
    </div>

    <div class="col-md-3">
    <label class="form-label">Pengarang Buku</label>
    <input type="text" class="form-control" name="author" value="{{ @$post -> author }}">
    </div>

    <div class="col-12">
    <label class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="inputAddress" name="publisher" value="{{ @$post -> publisher }}">
    </div>

    <div class="col-12">
    <label class="form-label">Tanggal Terbit</label>
    <input type="date" class="form-control" id="inputAddress2" name="publish_at" value="{{ @$post -> publish_at }}">
    </div>

    <div class="col-12">
    <label class="form-label">Synopsis</label>
    <input type="text" class="form-control" id="inputAddress2" name="excerpt" value="{{ @$post -> excerpt }}">
    </div>

    <div class="col-12">
    <label class="form-label">Cover</label>
    <input type="file" class="form-control" id="inputAddress2" name="filename">
    </div>



    <div class="col-12">
    <div class="form-floating">
    <textarea name="body" class="form-control" id="floatingTextarea2" style="height: 100px">{{ @$post -> body }}</textarea>
    <label for="floatingTextarea2">Isi Buku</label>
    </div>


    <div class="col-12 mb-8 mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection