@extends('layout')

@section('content')
    @foreach($posts as $post)
    {{-- @dd($loop) --}}
    <article>
        {{-- {{$post}} --}}
        {{-- {!! $post !!} --}}
        <h1>
            <a href="posts/{{$post->id}}">
                {{ $post->title }}
            </a>
        </h1>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
    @endforeach    
@endsection



    <!-- <article>
        <h1><a href="/posts/my-first-post">My First Post</a></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, nesciunt minima minus alias odit atque deserunt nulla culpa in, totam beatae repellat cumque consectetur maiores aliquam amet nihil ratione enim.</p>
    </article>
    <article>
        <h1><a href="/posts/my-second-post">My Second Post</a></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, nesciunt minima minus alias odit atque deserunt nulla culpa in, totam beatae repellat cumque consectetur maiores aliquam amet nihil ratione enim.</p>
    </article>
    <article>
        <h1><a href="/posts/my-third-post">My Third Post</a></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, nesciunt minima minus alias odit atque deserunt nulla culpa in, totam beatae repellat cumque consectetur maiores aliquam amet nihil ratione enim.</p>
    </article> -->
