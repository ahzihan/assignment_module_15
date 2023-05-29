@extends('layout.app')
@section('page-title')
    Post Update
@endsection
@section('content')
    <div class="row offset-3 col-md-6 mt-5">
        <h2>Post Update</h2>
        <form action="{{ route('post.store', $data->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" value="{{ $data->title }}" class="form-control @error('name') is-invalid @enderror" id="title">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" value="{{ $data->description }}" class="form-control @error('name') is-invalid @enderror" id="description">

                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

