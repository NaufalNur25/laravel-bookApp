@extends('layouts.detailLayout')

@section('contentDetail')
    <h2 style="margin-bottom: -3px">{{ $detail -> title }}</h2>
    <h6 style="margin-bottom: -3px">{{ $detail -> publisher }} | <small>{{ $detail -> category -> name }}</small></h6>
    <p style="font-size: 13px; color: rgb(177, 177, 177);">by {{ $detail -> author }}</p>
     {!! $detail -> body !!}
@endsection