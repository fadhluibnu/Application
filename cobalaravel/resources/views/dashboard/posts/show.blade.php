@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-2"
                    alt="{{ $post->category->name }}">

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
                <a href="/posts">Back To Posts</a>

            </div>
        </div>
    </div>
@endsection
