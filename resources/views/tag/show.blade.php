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
                <a class="btn btn-info" href="{{ route('tag') }}">Back</a>
                </div>

                <div class="card-body">
                    Title: {{$data->title}} <br>
                    Description: {{$data->desctiption}} <br>
                    Created Date: {{$data->created_at}} <br>
                    Updated Date: {{$data->updated_at}} <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
