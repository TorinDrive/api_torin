<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrSgl12;

class MrSgl12Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrSgl12::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrSgl12::findOrFail($id);
    }
}
