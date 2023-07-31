<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logoes = Logo::all();
        return view('admin.logo.index', compact('logoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/logo', $image_name);
            $requestData['image'] = $image_name;


        Logo::create($requestData);
        return redirect()->route('admin.logo.index')->with('seccess', 'Logo created saccessfuly');
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
    public function edit(Logo $logo)
    {
        return view('admin.logo.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        $this->validate($request, [
            'image' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/logo', $image_name);
            $requestData['image'] = $image_name;


        $logo->update($requestData);
        return redirect()->route('admin.logo.index')->with('seccess', 'Logo updated saccessfuly');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        $logo->delete();
        return redirect()->route('admin.logo.index')->with('seccess', 'Logo deleted saccessfuly');
    }
}
