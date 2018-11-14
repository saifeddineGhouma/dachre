<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    public function client()
    {
    	return $this->belongsTo('App\Client');
    }
     public function assureur()
    {
    	return $this->belongsTo('App\Assureur','assureurs_id');
    }
    public function primes()
    {
        return $this->hasMany('App\Prime');

    }
    public function autos()
    {
        return $this->hasMany('App\Auto','contrat_id');

    }
    public function rds()
    {
        return $this->hasMany('App\Rd','contrat_id');

    }
}
