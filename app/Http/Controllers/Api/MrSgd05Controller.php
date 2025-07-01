<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\MrSgd05; 

class MrSgd05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrSgd05::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrSgd05::findOrFail($id);
    }
}