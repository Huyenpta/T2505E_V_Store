@extends('layouts.app')
@section('title', 'Edit Item')

@section('content')
<h4>Edit Item</h4>

<form action="{{ route('store.update', $item->id) }}" method="POST">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Item Code</label>
        <input type="text" name="item_code" class="form-control" value="{{ $item->item_code }}" required>
    </div>

    <div class="mb-3">
        <label>Item Name</label>
        <input type="text" name="item_name" class="form-control" value="{{ $item->item_name }}" required>
    </div>

    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" step="0.01" name="quantity" class="form-control" value="{{ $item->quantity }}" required>
    </div>

    <div class="mb-3">
        <label>Expired Date</label>
        <input type="date" name="expired_date" class="form-control" value="{{ $item->expired_date }}" required>
    </div>

    <div class="mb-3">
        <label>Note</label>
        <input type="text" name="note" class="form-control" value="{{ $item->note }}">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('store.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
