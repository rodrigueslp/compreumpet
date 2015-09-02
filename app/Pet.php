<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model {
    
    protected $table = 'pet';
    protected $fillable = ['nome', 'pet_raca_id'];
    
    public function pet_raca() {
        return $this->belongsTo('App\PetRaca');
    }
    
}

