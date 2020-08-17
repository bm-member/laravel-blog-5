@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1>{{ $post->title }}</h1>
                <img src="{{ isset($post->image) ? asset($post->image) : 'https://via.placeholder.com/400x300' }}">
                <p>{!! $post->content !!}</p>
            </div>
            <div class="card-footer">
                <a href="{{ url("post") }}" class="btn btn-secondary">Back</a>
                <div class="float-right">
                    <a href="{{ url("post/$post->id/edit") }}" class="btn btn-success mr-1">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a onclick="return confirm('Are you sure to delete?')" href="{{ url("post/$post->id/delete") }}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection