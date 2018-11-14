<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    public function contrat()
    {
    	return $this->belongsTo('App\Contrat');
    }
}
