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
            <div class="card">
                <div class="card-header">
                <a class="btn btn-info" href="{{ route('category') }}">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('category-edit', [$id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title" value="{{$data->title}}" />
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Title</label>
                            <textarea name="description" class="form-control" placeholder="description">{{$data->description}}</textarea>
                        </div>

                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
