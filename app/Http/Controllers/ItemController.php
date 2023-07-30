<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Item::orderBy('name', 'DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newItem = new Item;

        $newItem->name = $request->item["name"];
        $newItem->description = $request->item["description"];
        $newItem->stock_min = $request->item["stock_min"];
        $newItem->actual_stock = $request->item["actual_stock"];
        $newItem->ubication = $request->item["ubication"];
        $newItem->supplier = $request->item["supplier"];
        $newItem->price = $request->item["price"];
        $newItem->benefit = $request->item["benefit"];

        $newItem->save();

        return $newItem;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $existingItem = Item::find( $id );

        if($existingItem){

            $existingItem->name = $request->item["name"] ? $request->item["name"] : $existingItem->name;
            $existingItem->description = $request->item["description"] ? $request->item["description"] : $existingItem->description;
            $existingItem->stock_min = $request->item["stock_min"] ? $request->item["stock_min"] : $existingItem->stock_min;
            $existingItem->actual_stock = $request->item["actual_stock"] ? $request->item["actual_stock"] : $existingItem->actual_stock;
            $existingItem->ubication = $request->item["ubication"] ? $request->item["ubication"] : $existingItem->ubication;
            $existingItem->supplier = $request->item["supplier"] ? $request->item["supplier"] : $existingItem->supplier;
            $existingItem->price = $request->item["price"] ? $request->item["price"] : $existingItem->price;
            $existingItem->benefit = $request->item["benefit"] ? $request->item["benefit"] : $existingItem->benefit;

            $existingItem->save();

            return $existingItem;
        }

        return "Item Not Found";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $existingItem = Item::find( $id );

        if ($existingItem) {
            $existingItem->delete();
            return "Item Succesfully Deleted";
        }

        return "no item found with the given id";
    }
}
