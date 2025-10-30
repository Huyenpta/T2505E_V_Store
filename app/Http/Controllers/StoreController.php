<?php

namespace App\Http\Controllers;

use App\Models\ItemSale;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Display all items
    public function index()
    {
        $items = ItemSale::orderBy('id', 'desc')->paginate(10);
        return view('store.index', compact('items'));
    }

    // Show create form
    public function create()
    {
        return view('store.create');
    }

    // Store new item
    public function store(Request $request)
    {
        $request->validate([
            'item_code' => ['required', 'max:6', 'regex:/^[a-zA-Z0-9]+$/'], // chỉ cho phép chữ và số
            'item_name' => ['required', 'max:50', 'regex:/^[a-zA-Z0-9\s]+$/'], // chữ, số và khoảng trắng
            'quantity' => 'required|numeric|min:0',
            'expired_date' => 'required|date',
            'note' => 'nullable|max:60',
        ]);


        ItemSale::create($request->all());

        return redirect()->route('store.index')->with('success', 'Item added successfully!');
    }

    // Show edit form
    public function edit(ItemSale $store)
    {
        return view('store.edit', compact('store')); // <-- Sửa ở đây
    }

    // Update item
    public function update(Request $request, ItemSale $store)
    {
        $request->validate([
            'item_code' => ['required', 'max:6', 'regex:/^[a-zA-Z0-9]+$/'], // chỉ cho phép chữ và số
            'item_name' => ['required', 'max:50', 'regex:/^[a-zA-Z0-9\s]+$/'], // chữ, số và khoảng trắng
            'quantity' => 'required|numeric|min:0',
            'expired_date' => 'required|date',
            'note' => 'nullable|max:60',
        ]);

        $store->update($request->all());

        return redirect()->route('store.index')->with('success', 'Item updated successfully!');
    }

    // Delete item
    public function destroy(ItemSale $store)
    {
        $store->delete();
        return redirect()->route('store.index')->with('success', 'Item deleted successfully!');
    }
}
