
@extends('layout')

@section('content')
    <article>
        {{-- @ddd($post) --}}
        <h1>{{ $post->title }}</h1>
        {{-- <div>{{$post->excerpt}}</div> --}}
        <div>{!! $post->body !!}</div>
    </article>
    <a href="/">Go Back</a> 
@endsection
