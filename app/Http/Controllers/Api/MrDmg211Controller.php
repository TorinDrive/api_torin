<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrDmg211;

class MrDmg211Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrDmg211::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrDmg211::findOrFail($id);
    }
}
