@extends('layout')

@section('content')
    @include('partials._search')
    <h2>
        <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
    </h2>

    <p>
        {{ $listing['description'] }}
    </p>
@endsection
