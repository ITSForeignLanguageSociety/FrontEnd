@extends('layouts.base')

@section('content')
    <div class="container">
        @foreach ($blogs as $b)
            <div class="card-body">
                <a href="/blog/{{ $b['slug'] }}">{{ $b['title'] }}</a>
            </div>
        @endforeach
    </div>
@endsection
