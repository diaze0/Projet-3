<?php

namespace App\Models;
use App\Models\tache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
     protected $fillable=[
        "Nom_du_brief",
        "Date_heure_de_livraison",
        "Date_heure_de_récupération",
    ];

    public function Tache(){
        return $this->hasMany(tache::class);
    }

}
