<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MrSgd00;

class MrSgd00Controller extends Controller
{
    public function index()
    {
        return MrSgd00::all(); 
    }

    public function show($id)
    {
        return MrSgd00::findOrFail($id);
    }
}