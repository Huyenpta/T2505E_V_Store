@extends('layouts.app')

@section('title', 'Chi Tiết Hàng Hóa')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Chi tiết hàng hóa: {{ $item->name }}</h5>
    </div>
    <div class="card-body">
        <p><strong>Mã hàng:</strong> {{ $item->id }}</p>
        <p><strong>Tên hàng hóa:</strong> {{ $item->name }}</p>
        <p><strong>Mô tả:</strong> {{ $item->description ?? 'Không có' }}</p>
        <p><strong>Giá:</strong> {{ number_format($item->price, 0, ',', '.') }} VNĐ</p>
        <p><strong>Số lượng:</strong> {{ $item->quantity }}</p>
        <p><strong>Ngày tạo:</strong> {{ $item->created_at->format('d/m/Y H:i') }}</p>

        <div class="mt-3">
            <a href="{{ route('store.index') }}" class="btn btn-secondary">← Quay lại</a>
            <a href="{{ route('store.edit', $item->id) }}" class="btn btn-warning">Sửa</a>
        </div>
    </div>
</div>
@endsection
