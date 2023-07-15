@extends('layouts.app')

@section('content')
    <div class="container">
        <!--
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <h4>{{ $post->fk_id_user }}</h4>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
        -->





        @foreach ($posts as $post)
            <div>
                <h2>{{ $post->title }}</h2>
                <h5>Autor: {{ $post->user->username }}</h5>
                <p>{{ $post->body }}</p>
            </div>
            <br>
            <br>
        @endforeach



        {{ $posts->links() }}
    </div>
@endsection