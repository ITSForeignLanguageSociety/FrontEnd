@extends('layouts.base')

@section('content')
    @foreach ($blogs as $b)
        <a href="/blog/{{ $b['slug'] }}">{{ $b['title'] }}</a>
    @endforeach
@endsection
