<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrHgl22;

class MrHgl22Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrHgl22::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrHgl22::findOrFail($id);
    }
}
