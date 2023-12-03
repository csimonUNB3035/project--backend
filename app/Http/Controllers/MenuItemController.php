<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return MenuItem::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
        ]);
        return MenuItem::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return MenuItem::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $item = MenuItem::find($id);

        $item->update($request->all());

        return $item;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return MenuItem::destroy($id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function search(string $name)
    {
        //
        $collection1 = MenuItem::where('name', 'like', '%'.$name.'%')->orWhere('description','like','%'.$name.'%')->get();

        return $collection1;

    }
}
