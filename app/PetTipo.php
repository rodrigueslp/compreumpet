<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetTipo extends Model {
    
    protected $table = 'pet_tipo';
    protected $fillable = ['nome'];
    
    public function raca() {
        return $this->hasMany('App\PetRaca');
    }
    
}