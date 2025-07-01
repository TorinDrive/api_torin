<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrRgl305;

class MrRgl305Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrRgl305::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrRgl305::findOrFail($id);
    }
}
