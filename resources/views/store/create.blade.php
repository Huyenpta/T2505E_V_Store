@extends('layouts.app')
@section('title', 'Add Item')

@section('content')
<h4>Add New Item</h4>

<form action="{{ route('store.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Item Code</label>
        <input type="text" name="item_code" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Item Name</label>
        <input type="text" name="item_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" step="0.01" name="quantity" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Expired Date</label>
        <input type="date" name="expired_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Note</label>
        <input type="text" name="note" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('store.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
