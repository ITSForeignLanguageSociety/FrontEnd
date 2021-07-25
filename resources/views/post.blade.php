@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>{{ $post['title'] }}</h1>
        <hr>
        {!! $post['body'] !!}
    </div>
@endsection
