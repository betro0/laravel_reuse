<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $info = info::all();
        // dd($info);
        return view('info.index', compact('info'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'age'=> 'required',
            'address'=> 'required',
        ]);
        $input = $request->all();
        info::create($input);
        return redirect()->route('info.index')
        ->with('success', 'Data has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(info $info)
    {
        $info = info::all();
        //  dd($info);
        return view('info.show',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(info $info)
    {
        //
        return view('info.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, info $info)
    {
        //
        $request->validate([
            'name'=> 'required',
            'age'=> 'required',
            'address'=> 'required',
            ]);
            $input = $request->all();
            $info->update($input);
            return redirect()->route('info.index')
            ->with('success','studen update succssfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(info $info)
    {
        //
        $info->delete();
        return redirect()->route('info.index')
        ->with('success','studen delete sucssfully');
    }
}
