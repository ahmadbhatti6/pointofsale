@extends('layouts.base')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="cost_price">Cost Price:</label>
            <input type="number" name="cost_price" id="cost_price" class="form-control" step="0.01" value="{{ $product->cost_price }}" required>
        </div>
        <div class="form-group">
            <label for="retail_price">Retail Price:</label>
            <input type="number" name="retail_price" id="retail_price" class="form-control" step="0.01" value="{{ $product->retail_price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
