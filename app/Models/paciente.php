<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;


    public function user(){
        $dados = $this->hasOne(User::class, 'id', 'user_id');
        return $dados;
    }
    public function genero(){
        return $this->hasOne(genero::class, 'id', 'genero_id');        
    }
}
