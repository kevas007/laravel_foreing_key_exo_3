<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    public function profils(){
        return $this->belongsTo(Profils::class, 'profil_id', 'id');
    }
}
