@extends('layout.app')
@section('page-title')
    Product List
@endsection
@section('content')

<div class="row offset-3 col-md-6 mt-5">
    <h2>Product List</h2>
    <a href="{{route('product.create')}}" style="float: right;padding: 3px 26px;" class="btn btn-warning btn-sm">Create Product</a>
    <table class="table table-bordered">
        <tr class="bg-primary">
            <th>SL</th>
            <th>Product Name</th>
            <th>Unit</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    @if(count($data) > 0)
            @php
            $sl=1;
            @endphp
		@foreach($data as $key => $pro)
        <tr>
            <td>{{ $sl++ }}</td>
            <td>{{ $pro->product_name }}</td>
            <td>{{ $pro->unit }}</td>
            <td>{{ $pro->price }}</td>
            <td>
                <a href="{{ route('product.edit', $pro->id) }}" class="btn btn-info btn-xs">Edit</a>
				<a href="{{ route('product.destroy', $pro->id) }}" class="btn btn-danger btn-xs" data-confirm-delete="true">Delete</a>
            </td>
        </tr>
        @endforeach
    @endif
    </table>

</div>

@endsection
