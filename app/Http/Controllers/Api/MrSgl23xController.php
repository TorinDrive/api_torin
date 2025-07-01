<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrSgl23x;

class MrSgl23xController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrSgl23x::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrSgl23x::findOrFail($id);
    }
}
