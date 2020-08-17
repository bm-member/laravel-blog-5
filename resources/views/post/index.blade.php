@extends('layouts.master')

@section('title', 'All Post')

@section('content')
@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-12">
           @include('messages.success')
        </div>
        @foreach ($posts as $post)
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-header h3">{{ $post->title }}</div>
                    <div class="card-body">{{ $post->content }}</div>
                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-8">
                                Post on <i>{{ $post->created_at->diffForHumans() }}</i> 
                                by {{ $post->author->name }}
                            </div>
                            <div class="col">
                                <a href="{{ url("/post/$post->id") }}" class="btn btn-primary"> View </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-12 mb-5">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection


