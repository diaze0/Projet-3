<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant_brief extends Model
{
    use HasFactory;
    
    protected $table='apprenant_brief';
    public $timestamps = FALSE;
     protected $fillable=[
        "apprenant_id",
        "brief_id",
    ];
}
