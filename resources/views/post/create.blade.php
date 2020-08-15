@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="col-12">
        @include('messages.error')
        <div class="card">
            <div class="card-header">Create Post</div>
            <div class="card-body">
                <form action="{{ url("post") }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10"
                        ></textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ url("post") }}" class="btn btn-secondary float-right">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection