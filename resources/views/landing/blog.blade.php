@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="display-4">My Blog</h1>
            </div>
        </div>
    </div>

    <div class="list-group">
        @foreach($blog_post as $post)
        <a href="{{route('blog')}}/{{$post->slug}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{$post->title}}</h5>
            <small>{{$post->created_at}}</small>
            </div>
            <p class="mb-1">{{$post->body}}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection
