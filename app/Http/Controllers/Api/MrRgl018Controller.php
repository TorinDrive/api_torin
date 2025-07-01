<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrRgl018;

class MrRgl018Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrRgl018::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrRgl018::findOrFail($id);
    }
}
