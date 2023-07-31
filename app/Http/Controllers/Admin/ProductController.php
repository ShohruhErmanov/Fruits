<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Filter;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filters = Filter::all();
        return view('admin.product.create', compact('filters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'money' => 'required',
            'filter_id' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/product', $image_name);
            $requestData['image'] = $image_name;

        }
        $requestData['slug'] = \Str::slug($request->title);

        Product::create($requestData);
        return redirect()->route('admin.product.index')->with('seccess', 'Product created saccessfuly');
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
    public function edit(Product $product)
    {
        $filters = Filter::all();
        return view('admin.product.edit', compact('product', 'filters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // dd($product);
        $this->validate($request, [
            'title' => 'required',
            'money' => 'required',
            'filter_id' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/product', $image_name);
            $requestData['image'] = $image_name;
        }
        $requestData['slug'] = \Str::slug($request->title);

        $product->update($requestData);
        return redirect()->route('admin.product.index')->with('seccess', 'Product updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index')->with('seccess', 'Product deleted saccessfuly');
    }
}
