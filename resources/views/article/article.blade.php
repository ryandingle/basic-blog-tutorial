@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="col-md-12">
            <h2>List of Articles</h2>

            <hr />
        </div>

        <div class="col-md-12">
            <a class="btn btn-info" href="{{ route('article-create') }}">Add Article</a>

            <br /><br />

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">body</th>
                        <th scope="col">Category</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Updated Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($data) === 0)
                        <tr>
                            <td scope="row" colspan="10" class="text-center">No categories data found.</td>
                        </tr>
                    @else

                        @foreach($data as $row)
                            <tr>
                                <th scope="row">{{$row->id}}</th>
                                <td>{{$row->title}}</td>
                                <td>{{$row->body}}</td>
                                <td>{{$row->category->title}}</td>
                                <td>{{$row->tag->title}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->updated_at}}</td>
                                <td>
                                    <a href="{{ route('article-show', [$row->id]) }}">Show</a> 
                                    |
                                    <a href="{{ route('article-edit', [$row->id]) }}">Edit</a> 
                                    | 
                                    <a href="{{ route('article-delete', [$row->id]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
