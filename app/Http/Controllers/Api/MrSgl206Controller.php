<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MrSgl206;

class MrSgl206Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrSgl206::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrSgl206::findOrFail($id);
    }
}
