<?php

namespace App\Http\Controllers;

use App\Models\bejegyzesek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesekController extends Controller
{
    public function index()
    {
        $bejegyzesek = bejegyzesek::all(); 
        return response()->json($bejegyzesek); 
    }
    public function osztalyra($id)
    {
        DB::table('bejegyzesek')
        ->where('bejegyzeseks.osztaly_id','=',$id)
        ->get();
    }
}
