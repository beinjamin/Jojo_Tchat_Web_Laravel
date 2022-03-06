<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    //Ici nous mettons en relation un utilisateur avec sont tweet oneToMany

    public function user()
    {
        return $this->belongsto(user::class);
    }
}
