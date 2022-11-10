<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
     protected $fillable=[
        "Nom_de_la_tache",
        "Debut_de_la_tache",
        "Fin_de_la_tache",
        "brief_id",
    ];
}
