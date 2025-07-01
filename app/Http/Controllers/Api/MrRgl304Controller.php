<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrRgl304;

class MrRgl304Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrRgl304::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrRgl304::findOrFail($id);
    }
}
