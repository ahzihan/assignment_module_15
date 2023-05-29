@extends('layout.app')
@section('page-title')
    Product Entry
@endsection
@section('content')
    <div class="row offset-3 col-md-6 mt-5">
        <h2>Create New Product</h2>
        <a href="{{route('product.index')}}" style="float: right;padding: 3px 26px;" class="btn btn-warning btn-sm">Product List</a>
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Product Name</label>
                <input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control @error('name') is-invalid @enderror" id="exampleInputName">

                @error('product_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" name="unit" value="{{ old('unit') }}" class="form-control @error('name') is-invalid @enderror" id="unit">

                @error('unit')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" value="{{ old('price') }}" class="form-control @error('name') is-invalid @enderror" id="price">

                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

