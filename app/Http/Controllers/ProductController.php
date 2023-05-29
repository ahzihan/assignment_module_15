<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    public function index()
    {
        $data = Product::all();
        return view('product.index', compact('data'));

    }


    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('product.index')->with('success','Data inserted successfully.');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Product::find($id);
        return view('product.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::where('id',$request->id)->update(array('product_name'=>$request->product_name,
        'price'=>$request->price,));
        return redirect('product.index')->with('success','Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id',$id)->delete();
        return redirect('product.index')->with('success','Product has been deleted successfully!');
    }
}
