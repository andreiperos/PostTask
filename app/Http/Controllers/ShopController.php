<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShopController extends Controller{
    // Create Items
    public function createItem(Request $request){
        $item = new Item();
        $item->brand = $request->input('brand');
        $item->name = $request->input('name');
        $item->layout = $request->input('layout');
        $item->price = $request->input('price');
        $item->save();
        return response()->json($item);
    }
    // Get all Items
    public function getAllItem(Request $request){
        $items = Item::all();
        return response()->json($items);
    }
    // Get Item by ID
    public function getItemById(Request $request, $id) {
        $item = Item::find($id);
        return response()->json($item);
    }
    // Update Item by ID
    public function updateItemById(Request $request, $id) {
        $item = Item::find($id);
        $item->brand = $request->input('brand');
        $item->name = $request->input('name');
        $item->layout = $request->input('layout');
        $item->price = $request->input('price');
        $item->save();
        return response()->json($item);
    }
    public function deleteItemById(Request $request, $id) {
        $item = Item::find($id)->delete();
        return response()->json($item);
    }
}
