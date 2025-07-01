<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrSgd13;

class MrSgd13Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrSgd13::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrSgd13::findOrFail($id);
    }
}
