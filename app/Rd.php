<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rd extends Model
{
    public function contrat()
    {
    	return $this->belongsTo('App\Contrat');
    }
     public function garanties()
    {
        return $this->hasMany('App\Garantie','rds_id');

    }
}
