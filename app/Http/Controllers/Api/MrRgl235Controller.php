<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrRgl235;

class MrRgl235Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrRgl235::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrRgl235::findOrFail($id);
    }
}
