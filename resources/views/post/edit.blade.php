@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="col-12">
        @include('messages.error')
        <div class="card">
            <div class="card-header">Edit Post</div>
            <div class="card-body">
                <form action="{{ url("post/$post->id") }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <textarea name="content" class="form-control" rows="10">{{ $post->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ url("post") }}" class="btn btn-secondary float-right">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection