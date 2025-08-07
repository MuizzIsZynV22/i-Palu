<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $items = Inventory::all();
        return view('inventory.index', compact('items'));
    }

    public function create()
    {
        $categories = ['kompang', 'jidur', 'djembe'];
        $conditions = ['baru', 'simpanan', 'rosak', 'hilang'];
        return view('inventory.create', compact('categories', 'conditions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_number' => 'required|string|unique:inventory,serial_number',
            'category' => 'required|in:kompang,jidur,djembe',
            'condition' => 'required|in:baru,simpanan,rosak,hilang',
            'notes' => 'nullable|string',
            'date_obtained' => 'required|date_format:d/m/Y',
        ]);

        // Convert date format for database storage
        $validated['date_obtained'] = \Carbon\Carbon::createFromFormat('d/m/Y', $validated['date_obtained']);

        Inventory::create($validated);

        return redirect()->route('inventory.index')->with('success', 'Item added successfully!');
    }

    public function show(Inventory $inventory)
    {
        return view('inventory.show', compact('inventory'));
    }

    public function edit(Inventory $inventory)
    {
        $categories = ['kompang', 'jidur', 'djembe'];
        $conditions = ['baru', 'simpanan', 'rosak', 'hilang'];
        return view('inventory.edit', compact('inventory', 'categories', 'conditions'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $validated = $request->validate([
            'serial_number' => 'required|string|unique:inventory,serial_number,'.$inventory->serial_number.',serial_number',
            'category' => 'required|in:kompang,jidur,djembe',
            'condition' => 'required|in:baru,simpanan,rosak,hilang',
            'notes' => 'nullable|string',
            'date_obtained' => 'required|date_format:d/m/Y',
        ]);

        // Convert date format for database storage
        $validated['date_obtained'] = \Carbon\Carbon::createFromFormat('d/m/Y', $validated['date_obtained']);

        $inventory->update($validated);

        return redirect()->route('inventory.index')->with('success', 'Item updated successfully!');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Item deleted successfully!');
    }
}