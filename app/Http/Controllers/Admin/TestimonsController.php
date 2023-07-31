<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimons;

class TestimonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimons = Testimons::all();
        return view('admin.testimons.index', compact('testimons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'job' => 'required',
            'text' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/testimons', $image_name);
            $requestData['image'] = $image_name;


        Testimons::create($requestData);
        return redirect()->route('admin.testimons.index')->with('seccess', 'Testimons created saccessfuly');
    }
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
    public function edit(Testimons $testimon)
    {
        return view('admin.testimons.edit', compact('testimon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimons $testimon)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'job' => 'required',
            'text' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/testimons', $image_name);
            $requestData['image'] = $image_name;


        $testimon->update($requestData);
        return redirect()->route('admin.testimons.index')->with('seccess', 'Testimons updated saccessfuly');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimons $testimon)
    {
        $testimon->delete();
        return redirect()->route('admin.testimons.index')->with('seccess', 'Testimons deleted saccessfuly');
    }
}
