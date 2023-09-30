<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempoLivre extends Model
{
    use HasFactory;

    public function consultorio(){
        return $this->hasOne(consultorio::class, 'id', 'consultorio_id');        
    }
    public function medico(){
        return $this->hasOne(user::class, 'id', 'medico_id');        
    }
}
