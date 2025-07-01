<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrRgl306;

class MrRgl306Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrRgl306::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrRgl306::findOrFail($id);
    }
}
