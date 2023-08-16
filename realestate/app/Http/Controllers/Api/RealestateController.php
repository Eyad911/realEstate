<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Realestate;
use Illuminate\Http\Request;

class RealestateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Realestate::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $realestate = Realestate::create([
            ...$request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'pic' =>  'array|min:1|max:5',
                'pic.*' => 'mimes:jpeg,jpg,png,gif|max:2048',
                'price' => 'required|numeric',
                'start_time' => 'required|date',
                'end_time' => 'required|date|after:start_time'
            ]),
            'user_id' => 1
        ]);

        return $realestate;
    }

    /**
     * Display the specified resource.
     */
    public function show(Realestate $realestate)
    {
        return $realestate;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
