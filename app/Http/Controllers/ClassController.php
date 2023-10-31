<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classs;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class = Classs::orderBy('created_at', 'DESC')->get();

        return view('class.index', compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Classs::create($request->all());

        return redirect()->route('class.index')->with('success', 'Class added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class = Classs::findOrFail($id);

        return view('class.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = Classs::findOrFail($id);

        return view('class.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Classs::findOrFail($id);

        $class->update($request->all());

        return redirect()->route('class.index')->with('success', 'Class updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = Classs::findOrFail($id);

        $class->delete();

        return redirect()->route('class.index')->with('success', 'Class deleted successfully');
    }
}
