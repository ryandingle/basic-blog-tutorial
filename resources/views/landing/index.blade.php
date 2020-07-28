@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-12">
            <div class="row justify-content-center text-center">
                <div class="jumbotron col-md-12">
                    <h1 class="display-4">Welcome to my Blog!</h1>
                    <p class="lead">Hello, I am a web developer.</p>
                    <hr class="my-4">
                    <a class="btn btn-primary btn-lg" href="{{ route('about') }}" role="button">Learn more</a>
                </div>
            </div>
        </div>

        <h1 class="text-center">Recent Blog Post</h1>
        
        <div class="list-group">
            @foreach($recent_blog as $post)
            <a href="{{route('blog')}}/{{$post->slug}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$post->title}}</h5>
                <small>{{$post->created_date}}</small>
                </div>
                <p class="mb-1">{{$post->body}}</p>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
