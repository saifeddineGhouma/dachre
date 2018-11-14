<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prime extends Model
{
    public function contrat()
    {
    	return $this->belongsTo('App\Contrat');
    }
}
