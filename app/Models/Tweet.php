<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    //Creation d'une variable proteger qui vas nous permettre de cree les donne de l'utilisateur avec importe quel champs content created ad etcc..
    protected $guarded = [];


    //Ici nous mettons en relation un utilisateur avec sont tweet oneToMany

    public function user()
    {
        return $this->belongsto(user::class);
    }
}
