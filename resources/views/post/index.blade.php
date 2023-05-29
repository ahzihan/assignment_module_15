@extends('layout.app')
@section('page-title')
    Post List
@endsection
@section('content')

<div class="row offset-3 col-md-6 mt-5">
    <h2>Post List</h2>
    <a href="{{route('post.create')}}" style="float: right;padding: 3px 26px;" class="btn btn-warning btn-sm">Create Post</a>
    <table class="table table-bordered">
        <tr class="bg-primary">
            <th>SL</th>
            <th>Post Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    @if(count($data) > 0)
            @php
            $sl=1;
            @endphp
		@foreach($data as $key => $pro)
        <tr>
            <td>{{ $sl++ }}</td>
            <td>{{ $pro->title }}</td>
            <td>{{ $pro->description }}</td>
            <td>
                <a href="{{ route('post.edit', $pro->id) }}" class="btn btn-info btn-xs">Edit</a>
				<a href="{{ route('post.destroy', $pro->id) }}" class="btn btn-danger btn-xs" data-confirm-delete="true">Delete</a>
            </td>
        </tr>
        @endforeach
    @endif
    </table>

</div>

@endsection
