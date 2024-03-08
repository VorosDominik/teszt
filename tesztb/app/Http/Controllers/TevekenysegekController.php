<?php

namespace App\Http\Controllers;

use App\Models\tevekenysegek;
use Illuminate\Http\Request;

class TevekenysegekController extends Controller
{
    public function index()
    {
        $bejegyzesek = tevekenysegek::all(); 
        return response()->json($bejegyzesek); 
    }
}
