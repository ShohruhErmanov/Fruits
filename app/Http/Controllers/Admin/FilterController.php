<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filter;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = Filter::all();
        return view('admin.filter.index', compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.filter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
         ]);


        Filter::create($request->all());
        return redirect()->route('admin.filter.index')->with('seccess', 'Product-Filter created saccessfuly');
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
    public function edit(Filter $filter)
    {
        return view('admin.filter.edit', compact('filter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filter $filter)
    {
        $this->validate($request, [
            'title' => 'required',
         ]);


        $filter->update($request->all());
        return redirect()->route('admin.filter.index')->with('seccess', 'Product-Filter updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filter $filter)
    {
        $filter->delete();
        return redirect()->route('admin.filter.index')->with('seccess', 'Product-Filter deleted saccessfuly');
    }
}
