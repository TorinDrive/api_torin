<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrHgl14;

class MrHgl14Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrHgl14::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrHgl14::findOrFail($id);
    }
}
