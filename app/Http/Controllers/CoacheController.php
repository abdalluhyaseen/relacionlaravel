<?php

namespace App\Http\Controllers;

use App\Models\coache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $coaches = Coache::with('students')->get();
return view('index', compact('coaches'));

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
    public function show( $id)
    {
          {
        // تحميل الطلاب المرتبطين بـ Coach
        $coach = coache::with('students')->findOrFail($id);

        return view('show', compact('coach'));
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coache $coache)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coache $coache)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coache $coache)
    {
        //
    }
}
