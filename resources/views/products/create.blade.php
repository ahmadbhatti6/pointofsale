@extends('layouts.base')

@section('content')
    <h1>Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="cost_price">Cost Price:</label>
            <input type="number" name="cost_price" id="cost_price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="retail_price">Retail Price:</label>
            <input type="number" name="retail_price" id="retail_price" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
