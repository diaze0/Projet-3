<?php

namespace App\Models;
use App\Models\tache;
use App\Models\apprenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brief extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $fillable=[
       "Nom_du_brief",
       "Date_heure_de_livraison",
       "Date_heure_de_récupération"
   ];

   public function hasManyTache(){
    return $this->hasMany(tache::class);
   }

   public function apprenant(){
    return $this->belongsToMany(apprenant::class);
    }
}
