<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrBgl225;

class MrBgl225Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrBgl225::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrBgl225::findOrFail($id);
    }
}
