<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //Relacion Entre Participante y Usuario
    public function user(){

        return $this->belongsTo(User::Class);

    }
}
