<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrSgl306;

class MrSgl306Controller extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MrSgl306::all(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MrSgl306::findOrFail($id);
    }
}
