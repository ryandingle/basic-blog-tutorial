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
                Add Article Form
                <a class="btn btn-info" href="{{ route('article') }}">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('article-create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title" />
                        </div>
                        
                        <div class="form-group">
                            <label for="Body">Body</label>
                            <textarea name="body" class="form-control" placeholder="Body"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Category</label>
                            <select name="category_id" class="form-control" placeholder="Category">
                                <option>-</option>
                                @foreach($category as $row)
                                <option value="{{ $row->id }}">{{ $row->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Tag</label>
                            <select name="tag_id" class="form-control" placeholder="Tag">
                                <option>-</option>
                                @foreach($tag as $row)
                                <option value="{{ $row->id }}">{{ $row->title }}</option>
                                @endforeach
                            </select>
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
