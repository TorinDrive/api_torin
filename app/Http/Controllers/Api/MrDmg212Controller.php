<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrDmg212;

class MrDmg212Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrDmg212::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrDmg212::findOrFail($id);
    }
}
