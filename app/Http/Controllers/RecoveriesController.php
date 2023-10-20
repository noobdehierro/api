<?php

namespace App\Http\Controllers;

use App\Models\recoveries;
use Illuminate\Http\Request;

class RecoveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recoveries = recoveries::paginate(10);

        return view('adminhtml.recoveries.index', compact('recoveries'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(recoveries $recoveries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recoveries $recoveries)
    {

        return view('adminhtml.recoveries.edit', compact('recoveries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, recoveries $recoveries)
    {

        $request->validate([
            'status' => 'required',
        ]);

        $recoveries->status = $request->status;
        $recoveries->save();

        return redirect()->route('recoveries.index')->with('success', 'Recovery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recoveries $recoveries)
    {
        $recoveries->delete();

        return redirect()->route('recoveries.index')->with('success', 'Recovery deleted successfully');
    }
}
