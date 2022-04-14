@extends('layouts.detailLayout')

@section('contentDetail')
    <img src="{{ asset('storage/images/'.$post -> filename) }}" alt="{{ $post -> filename }}" style="width: 150px;">
    <h2 style="margin-bottom: -3px">{{ $post -> title }}</h2>
    <h6 style="margin-bottom: -3px">{{ $post -> publisher }} | <small><a href="{{ route('categoryDetail', [$post -> category -> name]) }}" style="text-decoration: none; color: black;">{{ $post -> category -> name }}</a></small></h6>
    <p style="font-size: 13px; color: rgb(177, 177, 177);">by {{ $post -> author }}</p>
     {!! $post -> body !!}
@endsection
