<?php

namespace App\Models;
use App\Models\brief;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    use HasFactory;
    protected $table ='apprenant';
    public $timestamps = FALSE;
     protected $fillable=[
        "Nom",
        "Prenom",
        "Email",
        "promotion_id"
    ];
    public function brief(){
        return $this->belongsToMany(brief::class);
        }
}
