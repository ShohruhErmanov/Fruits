<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Network;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $socials = Network::all();
        return view('admin.social.index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'url' => 'required',
         ]);


        Network::create($request->all());
        return redirect()->route('admin.network.index')->with('seccess', 'Social created saccessfuly');
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
    public function edit(Network $network)
    {
        return view('admin.social.edit', compact('network'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Network $network)
    {
        $this->validate($request, [
            'icon' => 'required',
            'url' => 'required',
         ]);


         $network->update($request->all());
        return redirect()->route('admin.network.index')->with('seccess', 'Social created saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Network $network)
    {
        $network->delete();
        return redirect()->route('admin.network.index')->with('seccess', 'Social deleted saccessfuly');
    }
}
