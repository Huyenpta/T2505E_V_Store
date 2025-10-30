@extends('layouts.app')
@section('title', 'Edit Item')

@section('content')
<div class="card shadow-sm border-0">
    <div class="header-bar">
        <h2><i class="fa-solid fa-pen-to-square me-2"></i>Edit Item</h2>
    </div>

    <div class="p-4">
        <form action="{{ route('store.update', $store->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Item Code</label>
                <input type="text" name="item_code" class="form-control" value="{{ old('item_code', $store->item_code) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Item Name</label>
                <input type="text" name="item_name" class="form-control" value="{{ old('item_name', $store->item_name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" step="0.01" name="quantity" class="form-control" value="{{ old('quantity', $store->quantity) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Expired Date</label>
                <input type="date" name="expired_date" class="form-control" value="{{ old('expired_date', $store->expired_date) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Note</label>
                <textarea name="note" class="form-control" rows="2">{{ old('note', $store->note) }}</textarea>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('store.index') }}" class="btn btn-secondary me-2">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-save me-1"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>

<style>
.header-bar {
    background-color: #fff;
    color: #e75c3c;
    padding: 12px 20px;
    font-weight: 700;
    font-size: 20px;
    border-radius: 8px 8px 0 0;
    text-align: center;
    border-bottom: 3px solid #e75c3c;
}
</style>
@endsection
