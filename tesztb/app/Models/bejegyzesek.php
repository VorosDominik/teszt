<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bejegyzesek extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tevenyseg_id',
        'osztaly_id',
        'allapot',
    ];
}
