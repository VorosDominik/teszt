<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tevekenysegek extends Model
{
    use HasFactory;
    protected $primaryKey='teveknyseg_id';

    protected $fillable = [
        'teveknyseg_nev',
        'pontszam',
        
    ];
    
}
