@extends('layouts.app')

@section('content')
<div class="politics">
    <h1>{!! $documentObject['politics_title'] !!}</h1>
    <p>{!! $documentObject['content'] !!}</p>
</div>
@endsection
