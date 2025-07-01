<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrSgd10;

class MrSgd10Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrSgd10::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrSgd10::findOrFail($id);
    }
}
