<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $item = Item::create($request->all());

        return response()->json(['message' => 'Item created successfully', 'data' => $item], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string',
            'quantity' => 'integer',
            'price' => 'numeric',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return response()->json(['message' => 'Item updated successfully', 'data' => $item]);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item deleted successfully']);
    }
}
