@extends('layout.app')
@section('page-title')
    Post Entry
@endsection
@section('content')
    <div class="row offset-3 col-md-6 mt-5">
        <h2>Create New Post</h2>
        <a href="{{route('post.index')}}" style="float: right;padding: 3px 26px;" class="btn btn-warning btn-sm">Post List</a>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('name') is-invalid @enderror" id="title">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" value="{{ old('description') }}" class="form-control @error('name') is-invalid @enderror" id="description">

                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

