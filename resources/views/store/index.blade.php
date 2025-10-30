@extends('layouts.app')
@section('title', 'Sale Items')

@section('content')
<div class="card shadow-sm border-0">
    <div class="header-bar">
        <h2>Sale Items</h2>
    </div>

    <div class="p-3">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('store.create') }}" class="btn btn-add">
                <i class="fa-solid fa-plus me-1"></i> Add New
            </a>
        </div>

        <table class="table table-bordered text-center align-middle mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Expired Date</th>
                    <th>Note</th>
                    <th width="100">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->item_code }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ number_format($item->quantity, 2) }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->expired_date)->format('d/m/Y') }}</td>
                        <td>{{ $item->note }}</td>
                        <td>
                            <div class="action-icons">
                                <a href="{{ route('store.edit', $item->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                    Edit
                                </a>
                                <form action="{{ route('store.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                        onclick="return confirm('Delete this item?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-muted">No sale items found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $items->links() }}
        </div>
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
    .btn-add {
        background-color: #e75c3c;
        color: #fff;
        border: none;
        padding: 8px 14px;
        border-radius: 6px;
        font-weight: 500;
        transition: 0.2s;
    }
    .btn-add:hover {
        background-color: #d24f2f;
        color: #fff;
    }
    table thead {
        background-color: #e75c3c;
        color: #fff;
    }
    table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .action-icons {
        display: flex;
        justify-content: center;
        gap: 8px;
    }
</style>
@endsection
