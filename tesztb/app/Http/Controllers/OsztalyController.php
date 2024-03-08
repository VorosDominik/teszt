<?php

namespace App\Http\Controllers;

use App\Models\osztaly;
use Illuminate\Http\Request;

class OsztalyController extends Controller
{
    public function index()
    {
        $bejegyzesek = osztaly::all(); 
        return response()->json($bejegyzesek); 
    }
}
