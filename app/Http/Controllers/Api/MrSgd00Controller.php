<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MrSgd00;

class MrSgd00Controller extends Controller
{
    public function index()
    {
        return response()
            ->json(MrSgd00::all())
            ->header('Access-Control-Allow-Origin', '*');
    }

    public function show($id)
    {
        return response()
            ->json(MrSgd00::findOrFail($id))
            ->header('Access-Control-Allow-Origin', '*');
    }
}
