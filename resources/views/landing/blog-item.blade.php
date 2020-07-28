@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$post->title}}</h1>

    <hr />
    <small>{{$post->created_at}}</small>
    <hr />

    <p>{{$post->body}}</p>

</div>
@endsection
