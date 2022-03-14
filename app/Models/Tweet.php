<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
    use HasFactory;

    //Creation d'une variable proteger qui vas nous permettre de cree les donne de l'utilisateur avec importe quel champs content created ad etcc..
    protected $guarded = [];


    //Ici nous mettons en relation un utilisateur avec sont tweet oneToMany

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCreatedAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }
}
