@extends('layout.app')
@section('page-title')
    Product Update
@endsection
@section('content')
    <div class="row offset-3 col-md-6 mt-5">
        <form action="{{ route('product.store', $data->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Product Name</label>
                <input type="text" name="product_name" value="{{ $data->product_name }}" class="form-control @error('name') is-invalid @enderror" id="exampleInputName">

                @error('product_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" name="unit" value="{{ $data->unit }}" class="form-control @error('name') is-invalid @enderror" id="unit">

                @error('unit')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" value="{{ $data->price }}" class="form-control @error('name') is-invalid @enderror" id="price">

                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

