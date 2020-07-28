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
                Add Tag Form
                <a class="btn btn-info" href="{{ route('tag') }}">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('tag-create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title" />
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Title</label>
                            <textarea name="description" class="form-control" placeholder="description"></textarea>
                        </div>

                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
